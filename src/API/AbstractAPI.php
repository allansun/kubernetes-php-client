<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\API;


use Kubernetes\Client;
use Kubernetes\Exception\ProhibitedOperationException;
use Kubernetes\Model\AbstractModel;
use Kubernetes\Model\DeleteOptions;
use Kubernetes\Model\Patch;
use Kubernetes\Model\Tag\Group;

abstract class AbstractAPI
{
    const FUNCTION_WRITE = 'write';
    const FUNCTION_READ = 'read';
    const FUNCTION_STATUS = 'status';

    /**
     * @var string
     * Value to be specified in child class
     */
    protected $group;

    /**
     * @var string
     * Value to be specified in child class
     */
    protected $version;

    /**
     * @var string
     */
    protected $namespace;

    /**
     * @var string
     * Should be either 'apis' or 'api' depend on each api end point
     */
    protected $apiPrefix = 'apis';

    /**
     * @var string
     * Value to be specified in child class
     */
    protected $apiPostfix;

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var bool
     * Internal mark to identify if this API has 'write' functions
     */
    protected $isWriteFunctionAvailable = true;

    /**
     * @var bool
     * Internal mark to identify if this API has 'read' functions
     */
    protected $isReadFunctionAvailable = true;

    /**
     * @var bool
     * Internal mark to identify if this API has 'status' functions
     */
    protected $isStatusFunctionAvailable = true;

    /**
     * AbstractAPI constructor.
     *
     * @param string $namespace
     */
    public function __construct($namespace = 'default')
    {
        $this->client    = Client::getInstance();
        $this->namespace = $namespace;
    }

    /**
     * @param AbstractModel $model
     * @param array         $queryParameters
     *
     * @return AbstractModel|\StdClass
     */
    public function create(AbstractModel $model, $queryParameters = [])
    {
        $this->checkFunctionAvailability(self::FUNCTION_WRITE);

        return $this->parseRseponse(
            $this->client->request('POST',
                "/{$this->getApiPrefix()}/namespaces/{$this->namespace}/{$this->apiPostfix}",
                [
                    'query' => $queryParameters,
                    'json'  => $model->getArrayCopy()
                ]
            )
        );
    }

    /**
     * @param $function
     *
     * @throws ProhibitedOperationException
     */
    private function checkFunctionAvailability($function)
    {
        $availabilityProperty = 'is' . ucfirst($function) . 'FunctionAvailable';
        if (!property_exists(self::class, $availabilityProperty) || $this->$availabilityProperty !== true) {
            throw new ProhibitedOperationException($function);
        }
    }

    /**
     * @param \StdClass $response
     *
     * @return AbstractModel|\StdClass|
     */
    protected function parseRseponse($response)
    {
        if (!@$response->kind) {
            return $response;
        }
        $kind = $response->kind;

        if ('Namespace' == $kind) {
            $kind = 'NamespaceModel';
        }
        if (!class_exists('Kubernetes\Model\\' . $kind)) {
            return $response;
        }

        $kindClass = 'Kubernetes\Model\\' . $kind;

        return new $kindClass($response);
    }

    /**
     * @return string
     */
    protected function getApiPrefix()
    {
        return $this->apiPrefix . '/' .
               (Group::CORE == $this->group ? $this->version : "{$this->group}/{$this->version}");
    }

    /**
     * @param               $name
     * @param AbstractModel $model
     * @param array         $queryParameters
     *
     * @return AbstractModel|\StdClass|
     */
    public function replace($name, AbstractModel $model, $queryParameters = [])
    {
        $this->checkFunctionAvailability(self::FUNCTION_WRITE);

        return $this->parseRseponse(
            $this->client->request('PUT',
                "/{$this->getApiPrefix()}/namespaces/{$this->namespace}/{$this->apiPostfix}/{$name}",
                [
                    'query' => $queryParameters,
                    'json'  => $model->getArrayCopy()
                ]
            )
        );
    }

    /**
     * @param       $name
     * @param Patch $model
     * @param array $queryParameters
     *
     * @return AbstractModel|\StdClass|
     */
    public function patch($name, Patch $model, $queryParameters = [])
    {
        $this->checkFunctionAvailability(self::FUNCTION_WRITE);

        return $this->parseRseponse(
            $this->client->request('PATCH',
                "/{$this->getApiPrefix()}/namespaces/{$this->namespace}/{$this->apiPostfix}/{$name}",
                [
                    'query' => $queryParameters,
                    'json'  => $model->getArrayCopy()
                ]
            )
        );
    }

    /**
     * @param               $name
     * @param DeleteOptions $model
     * @param array         $queryParameters
     *
     * @return AbstractModel|\StdClass|
     */
    public function delete($name, DeleteOptions $model = null, $queryParameters = [])
    {
        $this->checkFunctionAvailability(self::FUNCTION_WRITE);

        return $this->parseRseponse(
            $this->client->request('DELETE',
                "/{$this->getApiPrefix()}/namespaces/{$this->namespace}/{$this->apiPostfix}/{$name}",
                [
                    'query' => $queryParameters,
                    'json'  => $model ? $model->getArrayCopy() : null
                ]
            )
        );
    }

    /**
     * @param array $queryParameters
     *
     * @return AbstractModel|\StdClass|
     */
    public function deleteCollection($queryParameters = [])
    {
        $this->checkFunctionAvailability(self::FUNCTION_WRITE);

        return $this->parseRseponse(
            $this->client->request('DELETE',
                "/{$this->getApiPrefix()}/namespaces/{$this->namespace}/{$this->apiPostfix}",
                [
                    'query' => $queryParameters,
                ]
            )
        );
    }

    /**
     * @param               $name
     * @param array         $queryParameters
     *
     * @return AbstractModel|\StdClass
     */
    public function read($name, $queryParameters = [])
    {
        $this->checkFunctionAvailability(self::FUNCTION_READ);

        return $this->parseRseponse(
            $this->client->request('GET',
                "/{$this->getApiPrefix()}/namespaces/{$this->namespace}/{$this->apiPostfix}/{$name}",
                [
                    'query' => $queryParameters,
                ]
            )
        );
    }

    /**
     * @param array $queryParameters
     *
     * @return AbstractModel|\StdClass|
     */
    public function list($queryParameters = [])
    {
        $this->checkFunctionAvailability(self::FUNCTION_READ);

        return $this->parseRseponse(
            $this->client->request('GET',
                "/{$this->getApiPrefix()}/namespaces/{$this->namespace}/{$this->apiPostfix}",
                [
                    'query' => $queryParameters,
                ]
            )
        );
    }

    /**
     * @param array $queryParameters
     *
     * @return AbstractModel|\StdClass|
     */
    public function listAll($queryParameters = [])
    {
        $this->checkFunctionAvailability(self::FUNCTION_READ);

        return $this->parseRseponse(
            $this->client->request('GET',
                "/{$this->getApiPrefix()}/{$this->apiPostfix}",
                [
                    'query' => $queryParameters,
                ]
            )
        );
    }

    /**
     * @param               $name
     * @param array         $queryParameters
     *
     * @return AbstractModel|\StdClass|
     */
    public function watch($name, $queryParameters = [])
    {
        $this->checkFunctionAvailability(self::FUNCTION_READ);

        return $this->parseRseponse(
            $this->client->request('GET',
                "/{$this->getApiPrefix()}/watch/namespaces/{$this->namespace}/{$this->apiPostfix}/{$name}",
                [
                    'query' => $queryParameters,
                ]
            )
        );
    }

    /**
     * @param array $queryParameters
     *
     * @return AbstractModel|\StdClass|
     */
    public function watchList($queryParameters = [])
    {
        $this->checkFunctionAvailability(self::FUNCTION_READ);

        return $this->parseRseponse(
            $this->client->request('GET',
                "/{$this->getApiPrefix()}/watch/namespaces/{$this->namespace}/{$this->apiPostfix}",
                [
                    'query' => $queryParameters,
                ]
            )
        );
    }

    /**
     * @param array $queryParameters
     *
     * @return AbstractModel|\StdClass|
     */
    public function watchAll($queryParameters = [])
    {
        $this->checkFunctionAvailability(self::FUNCTION_READ);

        return $this->parseRseponse(
            $this->client->request('GET',
                "/{$this->getApiPrefix()}/watch/{$this->apiPostfix}",
                [
                    'query' => $queryParameters,
                ]
            )
        );
    }

    /**
     * @param       $name
     * @param Patch $model
     * @param array $queryParameters
     *
     * @return AbstractModel|\StdClass|
     */
    public function statusPatch($name, Patch $model, $queryParameters = [])
    {
        $this->checkFunctionAvailability(self::FUNCTION_STATUS);

        return $this->parseRseponse(
            $this->client->request('PATCH',
                "/{$this->getApiPrefix()}/namespaces/{$this->namespace}/{$this->apiPostfix}/{$name}/status",
                [
                    'query' => $queryParameters,
                    'json'  => $model->getArrayCopy()
                ]
            )
        );
    }

    /**
     * @param               $name
     * @param array         $queryParameters
     *
     * @return AbstractModel|\StdClass|
     */
    public function statusRead($name, $queryParameters = [])
    {
        $this->checkFunctionAvailability(self::FUNCTION_STATUS);

        return $this->parseRseponse(
            $this->client->request('GET',
                "/{$this->getApiPrefix()}/namespaces/{$this->namespace}/{$this->apiPostfix}/{$name}/status",
                [
                    'query' => $queryParameters,
                ]
            )
        );
    }

    /**
     * @param               $name
     * @param AbstractModel $model
     * @param array         $queryParameters
     *
     * @return AbstractModel|\StdClass|
     */
    public function statusReplace($name, AbstractModel $model, $queryParameters = [])
    {
        $this->checkFunctionAvailability(self::FUNCTION_STATUS);

        return $this->parseRseponse(
            $this->client->request('PUT',
                "/{$this->getApiPrefix()}/namespaces/{$this->namespace}/{$this->apiPostfix}/{$name}/status",
                [
                    'query' => $queryParameters,
                    'json'  => $model->getArrayCopy()
                ]
            )
        );
    }
}
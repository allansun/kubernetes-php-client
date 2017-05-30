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

use Kubernetes\Exception\ProhibitedOperationException;
use Kubernetes\Model\AbstractModel;
use Kubernetes\Model\DeleteOptions;
use Kubernetes\Model\Patch;
use Kubernetes\Model\Tag\Group;
use Kubernetes\Model\Tag\Version;

class NamespaceAPI extends AbstractAPI
{

    protected $group = Group::CORE;

    protected $version = Version::V1;

    protected $apiPrefix = 'api';

    /**
     * @param AbstractModel $model
     * @param array         $queryParameters
     *
     * @return \StdClass
     */
    public function create(AbstractModel $model, $queryParameters = [])
    {
        return $this->parseRseponse(
            $this->client->request('POST',
                "/{$this->getApiPrefix()}/namespaces",
                [
                    'query' => $queryParameters,
                    'json'  => $model->getArrayCopy()
                ]
            )
        );
    }

    /**
     * @param               $name
     * @param AbstractModel $model
     * @param array         $queryParameters
     *
     * @return \StdClass
     */
    public function replace($name, AbstractModel $model, $queryParameters = [])
    {
        return $this->parseRseponse(
            $this->client->request('PUT',
                "/{$this->getApiPrefix()}/namespaces/{$name}",
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
     * @return \StdClass
     */
    public function patch($name, Patch $model, $queryParameters = [])
    {
        return $this->parseRseponse(
            $this->client->request('PATCH',
                "/{$this->getApiPrefix()}/namespaces/{$name}",
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
     * @return \StdClass
     */
    public function delete($name, DeleteOptions $model = null, $queryParameters = [])
    {
        return $this->parseRseponse(
            $this->client->request('DELETE',
                "/{$this->getApiPrefix()}/namespaces/{$name}",
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
     * @return \StdClass
     */
    public function deleteCollection($queryParameters = [])
    {
        return $this->parseRseponse(
            $this->client->request('DELETE',
                "/{$this->getApiPrefix()}/namespaces",
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
        return $this->parseRseponse(
            $this->client->request('GET',
                "/{$this->getApiPrefix()}/namespaces/{$name}",
                [
                    'query' => $queryParameters,
                ]
            )
        );
    }

    /**
     * @param array $queryParameters
     *
     * @return \StdClass
     */
    public function list($queryParameters = [])
    {
        return $this->parseRseponse(
            $this->client->request('GET',
                "/{$this->getApiPrefix()}/namespaces",
                [
                    'query' => $queryParameters,
                ]
            )
        );
    }

    /**
     * @param array $queryParameters
     *
     * @return \StdClass
     * @throws ProhibitedOperationException
     */
    public function listAll($queryParameters = [])
    {
        throw new ProhibitedOperationException(__METHOD__);
    }

    /**
     * @param               $name
     * @param array         $queryParameters
     *
     * @return \StdClass
     */
    public function watch($name, $queryParameters = [])
    {
        return $this->parseRseponse(
            $this->client->request('GET',
                "/{$this->getApiPrefix()}/watch/namespaces/{$name}",
                [
                    'query' => $queryParameters,
                ]
            )
        );
    }

    /**
     * @param array $queryParameters
     *
     * @return \StdClass
     */
    public function watchList($queryParameters = [])
    {
        return $this->parseRseponse(
            $this->client->request('GET',
                "/{$this->getApiPrefix()}/watch/namespaces",
                [
                    'query' => $queryParameters,
                ]
            )
        );
    }

    /**
     * @param array $queryParameters
     *
     * @return \StdClass|void
     * @throws ProhibitedOperationException
     */
    public function watchAll($queryParameters = [])
    {
        throw new ProhibitedOperationException(__METHOD__);
    }

    /**
     * @param       $name
     * @param Patch $model
     * @param array $queryParameters
     *
     * @return \StdClass
     */
    public function statusPatch($name, Patch $model, $queryParameters = [])
    {
        return $this->parseRseponse(
            $this->client->request('PATCH',
                "/{$this->getApiPrefix()}/namespaces/{$name}/status",
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
     * @return \StdClass
     */
    public function statusRead($name, $queryParameters = [])
    {
        return $this->parseRseponse(
            $this->client->request('GET',
                "/{$this->getApiPrefix()}/namespaces/{$name}/status",
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
     * @return \StdClass
     */
    public function statusReplace($name, AbstractModel $model, $queryParameters = [])
    {
        return $this->parseRseponse(
            $this->client->request('PUT',
                "/{$this->getApiPrefix()}/namespaces/{$name}/status",
                [
                    'query' => $queryParameters,
                    'json'  => $model->getArrayCopy()
                ]
            )
        );
    }
}
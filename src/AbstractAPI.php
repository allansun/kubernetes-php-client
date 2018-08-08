<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes;


use Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status;
use Psr\Http\Message\ResponseInterface;

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
     * @param ResponseInterface $response
     *
     * @param string            $operationId
     *
     * @return ModelInterface|mixed
     */
    protected function parseResponse($response, string $operationId)
    {
        $contents = (string)$response->getBody();

        if ($response->getHeader('content-type')[0] == 'application/json') {
            $contents = json_decode($contents, true);
        }

        if (!is_array($contents) || !array_key_exists('kind', $contents)) {
            return $contents;
        }

        if (array_key_exists($operationId, ResponseTypes::TYPES) &&
            array_key_exists($response->getStatusCode() . '.', ResponseTypes::TYPES[$operationId])) {
            $className = ResponseTypes::TYPES[$operationId][$response->getStatusCode() . '.'];

            return new $className($contents);
        }

        if ('Status' == $contents['kind']) {
            return new Status($contents);
        }


        return $contents;
    }

}
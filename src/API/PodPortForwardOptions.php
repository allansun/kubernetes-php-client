<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;

class PodPortForwardOptions extends AbstractAPI
{
    /**
     * connect GET requests to portforward of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the PodPortForwardOptions
     * @param array $queries options:
     * 'ports'	integer
     * List of ports to forward Required when using WebSockets
     *
     * @return string|mixed
     */
    public function connectGetPodPortforward(string $name, array $queries = [], string $namespace)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/portforward",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1GetNamespacedPodPortforward'
        );
    }

    /**
     * connect POST requests to portforward of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the PodPortForwardOptions
     * @param array $queries options:
     * 'ports'	integer
     * List of ports to forward Required when using WebSockets
     *
     * @return string|mixed
     */
    public function connectPostPodPortforward(string $name, array $queries = [], string $namespace)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/portforward",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PostNamespacedPodPortforward'
        );
    }
}


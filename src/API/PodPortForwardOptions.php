<?php

namespace Kubernetes\API;

class PodPortForwardOptions extends \Kubernetes\AbstractAPI
{

    /**
     * connect GET requests to portforward of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectGetPodPortforward($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/portforward"
        		,[
        		]
        	)
        	, 'connectCoreV1GetNamespacedPodPortforward'
        );
    }

    /**
     * connect POST requests to portforward of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPostPodPortforward($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/portforward"
        		,[
        		]
        	)
        	, 'connectCoreV1PostNamespacedPodPortforward'
        );
    }


}


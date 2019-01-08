<?php

namespace Kubernetes\API;

class PodAttachOptions extends \Kubernetes\AbstractAPI
{

    /**
     * connect GET requests to attach of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectGetPodAttach($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/attach"
        		,[
        		]
        	)
        	, 'connectCoreV1GetNamespacedPodAttach'
        );
    }

    /**
     * connect POST requests to attach of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPostPodAttach($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/attach"
        		,[
        		]
        	)
        	, 'connectCoreV1PostNamespacedPodAttach'
        );
    }


}


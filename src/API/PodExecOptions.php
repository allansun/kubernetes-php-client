<?php

namespace Kubernetes\API;

class PodExecOptions extends \Kubernetes\AbstractAPI
{

    /**
     * connect GET requests to exec of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectGetPodExec($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/exec"
        		,[
        		]
        	)
        	, 'connectCoreV1GetNamespacedPodExec'
        );
    }

    /**
     * connect POST requests to exec of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPostPodExec($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/exec"
        		,[
        		]
        	)
        	, 'connectCoreV1PostNamespacedPodExec'
        );
    }


}


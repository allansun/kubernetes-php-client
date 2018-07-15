<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Policy\V1beta1\Eviction as Eviction;

class Eviction extends \Kubernetes\AbstractAPI
{

    /**
     * create eviction of a Pod
     *
     * @param string $namespace
     * @param $name
     * @param Eviction $Model
     * @return Eviction|mixed
     */
    public function createPod(string $namespace = 'default', $name, \Eviction $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/eviction"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createCoreV1NamespacedPodEviction'
        );
    }


}


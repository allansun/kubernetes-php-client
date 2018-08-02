<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Policy\V1beta1\Eviction as TheEviction;

class Eviction extends \Kubernetes\AbstractAPI
{

    /**
     * create eviction of a Pod
     *
     * @param $namespace
     * @param $name
     * @param TheEviction $Model
     * @return TheEviction|mixed
     */
    public function createPod($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Policy\V1beta1\Eviction $Model)
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


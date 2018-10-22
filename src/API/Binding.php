<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Core\V1\Binding as TheBinding;

class Binding extends \Kubernetes\AbstractAPI
{

    /**
     * create a Binding
     *
     * @param $namespace
     * @param TheBinding $Model
     * @return TheBinding|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Core\V1\Binding $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/bindings"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createCoreV1NamespacedBinding'
        );
    }

    /**
     * create binding of a Pod
     *
     * @param $namespace
     * @param $name
     * @param TheBinding $Model
     * @return TheBinding|mixed
     */
    public function createPod($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Core\V1\Binding $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/binding"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createCoreV1NamespacedPodBinding'
        );
    }


}


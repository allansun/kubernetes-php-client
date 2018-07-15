<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Core\V1\Binding as Binding;

class Binding extends \Kubernetes\AbstractAPI
{

    /**
     * create a Binding
     *
     * @param string $namespace
     * @param Binding $Model
     * @return Binding|mixed
     */
    public function create(string $namespace = 'default', \Binding $Model)
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
     * @param string $namespace
     * @param $name
     * @param Binding $Model
     * @return Binding|mixed
     */
    public function createPod(string $namespace = 'default', $name, \Binding $Model)
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


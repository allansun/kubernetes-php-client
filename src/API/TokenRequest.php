<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Authentication\V1\TokenRequest as TheTokenRequest;

class TokenRequest extends \KubernetesRuntime\AbstractAPI
{

    /**
     * create token of a ServiceAccount
     *
     * @param $namespace
     * @param $name
     * @param TheTokenRequest $Model
     * @return TheTokenRequest|mixed
     */
    public function createServiceAccountToken($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Authentication\V1\TokenRequest $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/serviceaccounts/{$name}/token"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createCoreV1NamespacedServiceAccountToken'
        );
    }


}


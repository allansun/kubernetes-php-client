<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\DeploymentRollback as DeploymentRollback;
use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\DeploymentRollback as DeploymentRollback;

class DeploymentRollback extends \Kubernetes\AbstractAPI
{

    /**
     * create rollback of a Deployment
     *
     * @param string $namespace
     * @param $name
     * @param DeploymentRollback $Model
     * @return DeploymentRollback|mixed
     */
    public function create(string $namespace = 'default', $name, \DeploymentRollback $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/deployments/{$name}/rollback"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAppsV1beta1NamespacedDeploymentRollback'
        );
    }

    /**
     * create rollback of a Deployment
     *
     * @param string $namespace
     * @param $name
     * @param DeploymentRollback $Model
     * @return DeploymentRollback|mixed
     */
    public function createExtensionsV1beta1(string $namespace = 'default', $name, \DeploymentRollback $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/deployments/{$name}/rollback"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createExtensionsV1beta1NamespacedDeploymentRollback'
        );
    }


}


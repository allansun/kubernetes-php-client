<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\DeploymentRollback as TheDeploymentRollback;
use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\DeploymentRollback as TheDeploymentRollbackV1beta1;

class DeploymentRollback extends \Kubernetes\AbstractAPI
{

    /**
     * create rollback of a Deployment
     *
     * @param $namespace
     * @param $name
     * @param TheDeploymentRollback $Model
     * @return TheDeploymentRollback|mixed
     */
    public function create($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\DeploymentRollback $Model)
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
     * @param $namespace
     * @param $name
     * @param TheDeploymentRollbackV1beta1 $Model
     * @return TheDeploymentRollbackV1beta1|mixed
     */
    public function createExtensionsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\DeploymentRollback $Model)
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


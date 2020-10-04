<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\DeploymentRollback as TheDeploymentRollback;
use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\DeploymentRollback as TheDeploymentRollbackV1beta1;

class DeploymentRollback extends AbstractAPI
{

    /**
     * create rollback of a Deployment
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the DeploymentRollback
     * @param TheDeploymentRollback $Model
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheDeploymentRollback|mixed
     */
    public function create(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\DeploymentRollback $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/deployments/{$name}/rollback",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createAppsV1beta1NamespacedDeploymentRollback'
        );
    }

    /**
     * create rollback of a Deployment
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the DeploymentRollback
     * @param TheDeploymentRollbackV1beta1 $Model
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheDeploymentRollbackV1beta1|mixed
     */
    public function createExtensionsV1beta1(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\DeploymentRollback $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/deployments/{$name}/rollback",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createExtensionsV1beta1NamespacedDeploymentRollback'
        );
    }


}


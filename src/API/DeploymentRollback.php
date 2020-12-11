<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\DeploymentRollback as TheDeploymentRollback;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
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
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'fieldManager'	string
     * fieldManager is a name associated with the actor or entity that is making these
     * changes. The value must be less than or 128 characters long, and only contain
     * printable characters, as defined by https://golang.org/pkg/unicode/#IsPrint.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return Status|mixed
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
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'fieldManager'	string
     * fieldManager is a name associated with the actor or entity that is making these
     * changes. The value must be less than or 128 characters long, and only contain
     * printable characters, as defined by https://golang.org/pkg/unicode/#IsPrint.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return Status|mixed
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


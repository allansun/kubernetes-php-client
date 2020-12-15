<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Authentication\V1\TokenRequest as TheTokenRequest;

class TokenRequest extends AbstractAPI
{

    /**
     * create token of a ServiceAccount
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the TokenRequest
     * @param TheTokenRequest $Model
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
     * @return TheTokenRequest|mixed
     */
    public function createServiceAccountToken(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Api\Authentication\V1\TokenRequest $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/serviceaccounts/{$name}/token",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createCoreV1NamespacedServiceAccountToken'
        );
    }


}


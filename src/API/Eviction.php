<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Policy\V1beta1\Eviction as TheEviction;

class Eviction extends AbstractAPI
{

    /**
     * create eviction of a Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Eviction
     * @param TheEviction $Model
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'includeUninitialized'	boolean
     * If IncludeUninitialized is specified, the object may be returned without
     * completing initialization.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheEviction|mixed
     */
    public function createPod(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Api\Policy\V1beta1\Eviction $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/eviction",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createCoreV1NamespacedPodEviction'
        );
    }


}


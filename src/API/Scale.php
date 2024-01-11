<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\Scale as TheScale;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;

class Scale extends AbstractAPI
{
    /**
     * read scale of the specified ReplicationController
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Scale
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheScale|mixed
     */
    public function readReplicationController(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/replicationcontrollers/{$name}/scale",
        		[
        			'query' => $queries,
        		]
        	),
        	'readCoreV1NamespacedReplicationControllerScale'
        );
    }

    /**
     * replace scale of the specified ReplicationController
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Scale
     * @param TheScale $Model
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
     * 'fieldValidation'	string
     * fieldValidation instructs the server on how to handle objects in the request
     * (POST/PUT/PATCH) containing unknown or duplicate fields, provided that the
     * `ServerSideFieldValidation` feature gate is also enabled. Valid values are: -
     * Ignore: This will ignore any unknown fields that are silently dropped from the
     * object, and will ignore all but the last duplicate field that the decoder
     * encounters. This is the default behavior prior to v1.23 and is the default
     * behavior when the `ServerSideFieldValidation` feature gate is disabled. - Warn:
     * This will send a warning via the standard warning response header for each
     * unknown field that is dropped from the object, and for each duplicate field that
     * is encountered. The request will still succeed if there are no other errors, and
     * will only persist the last of any duplicate fields. This is the default when the
     * `ServerSideFieldValidation` feature gate is enabled. - Strict: This will fail
     * the request with a BadRequest error if any unknown fields would be dropped from
     * the object, or if any duplicate fields are present. The error returned from the
     * server will contain all unknown and duplicate fields encountered.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheScale|mixed
     */
    public function replaceReplicationController(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\Scale $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/replicationcontrollers/{$name}/scale",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceCoreV1NamespacedReplicationControllerScale'
        );
    }

    /**
     * partially update scale of the specified ReplicationController
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Scale
     * @param Patch $Model
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
     * This field is required for apply requests (application/apply-patch) but optional
     * for non-apply patch types (JsonPatch, MergePatch, StrategicMergePatch).
     * 'fieldValidation'	string
     * fieldValidation instructs the server on how to handle objects in the request
     * (POST/PUT/PATCH) containing unknown or duplicate fields, provided that the
     * `ServerSideFieldValidation` feature gate is also enabled. Valid values are: -
     * Ignore: This will ignore any unknown fields that are silently dropped from the
     * object, and will ignore all but the last duplicate field that the decoder
     * encounters. This is the default behavior prior to v1.23 and is the default
     * behavior when the `ServerSideFieldValidation` feature gate is disabled. - Warn:
     * This will send a warning via the standard warning response header for each
     * unknown field that is dropped from the object, and for each duplicate field that
     * is encountered. The request will still succeed if there are no other errors, and
     * will only persist the last of any duplicate fields. This is the default when the
     * `ServerSideFieldValidation` feature gate is enabled. - Strict: This will fail
     * the request with a BadRequest error if any unknown fields would be dropped from
     * the object, or if any duplicate fields are present. The error returned from the
     * server will contain all unknown and duplicate fields encountered.
     * 'force'	boolean
     * Force is going to "force" Apply requests. It means user will re-acquire
     * conflicting fields owned by other people. Force flag must be unset for non-apply
     * patch requests.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheScale|mixed
     */
    public function patchReplicationController(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/replicationcontrollers/{$name}/scale",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'patchCoreV1NamespacedReplicationControllerScale'
        );
    }

    /**
     * read scale of the specified Deployment
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Scale
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheScale|mixed
     */
    public function readDeployment(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments/{$name}/scale",
        		[
        			'query' => $queries,
        		]
        	),
        	'readAppsV1NamespacedDeploymentScale'
        );
    }

    /**
     * replace scale of the specified Deployment
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Scale
     * @param TheScale $Model
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
     * 'fieldValidation'	string
     * fieldValidation instructs the server on how to handle objects in the request
     * (POST/PUT/PATCH) containing unknown or duplicate fields, provided that the
     * `ServerSideFieldValidation` feature gate is also enabled. Valid values are: -
     * Ignore: This will ignore any unknown fields that are silently dropped from the
     * object, and will ignore all but the last duplicate field that the decoder
     * encounters. This is the default behavior prior to v1.23 and is the default
     * behavior when the `ServerSideFieldValidation` feature gate is disabled. - Warn:
     * This will send a warning via the standard warning response header for each
     * unknown field that is dropped from the object, and for each duplicate field that
     * is encountered. The request will still succeed if there are no other errors, and
     * will only persist the last of any duplicate fields. This is the default when the
     * `ServerSideFieldValidation` feature gate is enabled. - Strict: This will fail
     * the request with a BadRequest error if any unknown fields would be dropped from
     * the object, or if any duplicate fields are present. The error returned from the
     * server will contain all unknown and duplicate fields encountered.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheScale|mixed
     */
    public function replaceDeployment(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\Scale $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments/{$name}/scale",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceAppsV1NamespacedDeploymentScale'
        );
    }

    /**
     * partially update scale of the specified Deployment
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Scale
     * @param Patch $Model
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
     * This field is required for apply requests (application/apply-patch) but optional
     * for non-apply patch types (JsonPatch, MergePatch, StrategicMergePatch).
     * 'fieldValidation'	string
     * fieldValidation instructs the server on how to handle objects in the request
     * (POST/PUT/PATCH) containing unknown or duplicate fields, provided that the
     * `ServerSideFieldValidation` feature gate is also enabled. Valid values are: -
     * Ignore: This will ignore any unknown fields that are silently dropped from the
     * object, and will ignore all but the last duplicate field that the decoder
     * encounters. This is the default behavior prior to v1.23 and is the default
     * behavior when the `ServerSideFieldValidation` feature gate is disabled. - Warn:
     * This will send a warning via the standard warning response header for each
     * unknown field that is dropped from the object, and for each duplicate field that
     * is encountered. The request will still succeed if there are no other errors, and
     * will only persist the last of any duplicate fields. This is the default when the
     * `ServerSideFieldValidation` feature gate is enabled. - Strict: This will fail
     * the request with a BadRequest error if any unknown fields would be dropped from
     * the object, or if any duplicate fields are present. The error returned from the
     * server will contain all unknown and duplicate fields encountered.
     * 'force'	boolean
     * Force is going to "force" Apply requests. It means user will re-acquire
     * conflicting fields owned by other people. Force flag must be unset for non-apply
     * patch requests.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheScale|mixed
     */
    public function patchDeployment(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments/{$name}/scale",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'patchAppsV1NamespacedDeploymentScale'
        );
    }

    /**
     * read scale of the specified ReplicaSet
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Scale
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheScale|mixed
     */
    public function readReplicaSet(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets/{$name}/scale",
        		[
        			'query' => $queries,
        		]
        	),
        	'readAppsV1NamespacedReplicaSetScale'
        );
    }

    /**
     * replace scale of the specified ReplicaSet
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Scale
     * @param TheScale $Model
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
     * 'fieldValidation'	string
     * fieldValidation instructs the server on how to handle objects in the request
     * (POST/PUT/PATCH) containing unknown or duplicate fields, provided that the
     * `ServerSideFieldValidation` feature gate is also enabled. Valid values are: -
     * Ignore: This will ignore any unknown fields that are silently dropped from the
     * object, and will ignore all but the last duplicate field that the decoder
     * encounters. This is the default behavior prior to v1.23 and is the default
     * behavior when the `ServerSideFieldValidation` feature gate is disabled. - Warn:
     * This will send a warning via the standard warning response header for each
     * unknown field that is dropped from the object, and for each duplicate field that
     * is encountered. The request will still succeed if there are no other errors, and
     * will only persist the last of any duplicate fields. This is the default when the
     * `ServerSideFieldValidation` feature gate is enabled. - Strict: This will fail
     * the request with a BadRequest error if any unknown fields would be dropped from
     * the object, or if any duplicate fields are present. The error returned from the
     * server will contain all unknown and duplicate fields encountered.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheScale|mixed
     */
    public function replaceReplicaSet(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\Scale $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets/{$name}/scale",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceAppsV1NamespacedReplicaSetScale'
        );
    }

    /**
     * partially update scale of the specified ReplicaSet
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Scale
     * @param Patch $Model
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
     * This field is required for apply requests (application/apply-patch) but optional
     * for non-apply patch types (JsonPatch, MergePatch, StrategicMergePatch).
     * 'fieldValidation'	string
     * fieldValidation instructs the server on how to handle objects in the request
     * (POST/PUT/PATCH) containing unknown or duplicate fields, provided that the
     * `ServerSideFieldValidation` feature gate is also enabled. Valid values are: -
     * Ignore: This will ignore any unknown fields that are silently dropped from the
     * object, and will ignore all but the last duplicate field that the decoder
     * encounters. This is the default behavior prior to v1.23 and is the default
     * behavior when the `ServerSideFieldValidation` feature gate is disabled. - Warn:
     * This will send a warning via the standard warning response header for each
     * unknown field that is dropped from the object, and for each duplicate field that
     * is encountered. The request will still succeed if there are no other errors, and
     * will only persist the last of any duplicate fields. This is the default when the
     * `ServerSideFieldValidation` feature gate is enabled. - Strict: This will fail
     * the request with a BadRequest error if any unknown fields would be dropped from
     * the object, or if any duplicate fields are present. The error returned from the
     * server will contain all unknown and duplicate fields encountered.
     * 'force'	boolean
     * Force is going to "force" Apply requests. It means user will re-acquire
     * conflicting fields owned by other people. Force flag must be unset for non-apply
     * patch requests.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheScale|mixed
     */
    public function patchReplicaSet(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets/{$name}/scale",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'patchAppsV1NamespacedReplicaSetScale'
        );
    }

    /**
     * read scale of the specified StatefulSet
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Scale
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheScale|mixed
     */
    public function readStatefulSet(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets/{$name}/scale",
        		[
        			'query' => $queries,
        		]
        	),
        	'readAppsV1NamespacedStatefulSetScale'
        );
    }

    /**
     * replace scale of the specified StatefulSet
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Scale
     * @param TheScale $Model
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
     * 'fieldValidation'	string
     * fieldValidation instructs the server on how to handle objects in the request
     * (POST/PUT/PATCH) containing unknown or duplicate fields, provided that the
     * `ServerSideFieldValidation` feature gate is also enabled. Valid values are: -
     * Ignore: This will ignore any unknown fields that are silently dropped from the
     * object, and will ignore all but the last duplicate field that the decoder
     * encounters. This is the default behavior prior to v1.23 and is the default
     * behavior when the `ServerSideFieldValidation` feature gate is disabled. - Warn:
     * This will send a warning via the standard warning response header for each
     * unknown field that is dropped from the object, and for each duplicate field that
     * is encountered. The request will still succeed if there are no other errors, and
     * will only persist the last of any duplicate fields. This is the default when the
     * `ServerSideFieldValidation` feature gate is enabled. - Strict: This will fail
     * the request with a BadRequest error if any unknown fields would be dropped from
     * the object, or if any duplicate fields are present. The error returned from the
     * server will contain all unknown and duplicate fields encountered.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheScale|mixed
     */
    public function replaceStatefulSet(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\Scale $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets/{$name}/scale",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceAppsV1NamespacedStatefulSetScale'
        );
    }

    /**
     * partially update scale of the specified StatefulSet
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Scale
     * @param Patch $Model
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
     * This field is required for apply requests (application/apply-patch) but optional
     * for non-apply patch types (JsonPatch, MergePatch, StrategicMergePatch).
     * 'fieldValidation'	string
     * fieldValidation instructs the server on how to handle objects in the request
     * (POST/PUT/PATCH) containing unknown or duplicate fields, provided that the
     * `ServerSideFieldValidation` feature gate is also enabled. Valid values are: -
     * Ignore: This will ignore any unknown fields that are silently dropped from the
     * object, and will ignore all but the last duplicate field that the decoder
     * encounters. This is the default behavior prior to v1.23 and is the default
     * behavior when the `ServerSideFieldValidation` feature gate is disabled. - Warn:
     * This will send a warning via the standard warning response header for each
     * unknown field that is dropped from the object, and for each duplicate field that
     * is encountered. The request will still succeed if there are no other errors, and
     * will only persist the last of any duplicate fields. This is the default when the
     * `ServerSideFieldValidation` feature gate is enabled. - Strict: This will fail
     * the request with a BadRequest error if any unknown fields would be dropped from
     * the object, or if any duplicate fields are present. The error returned from the
     * server will contain all unknown and duplicate fields encountered.
     * 'force'	boolean
     * Force is going to "force" Apply requests. It means user will re-acquire
     * conflicting fields owned by other people. Force flag must be unset for non-apply
     * patch requests.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheScale|mixed
     */
    public function patchStatefulSet(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets/{$name}/scale",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'patchAppsV1NamespacedStatefulSetScale'
        );
    }
}


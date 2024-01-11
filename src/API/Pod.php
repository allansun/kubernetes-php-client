<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\PodList as PodList;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\Pod as ThePod;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class Pod extends AbstractAPI
{
    /**
     * list or watch objects of kind Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param array $queries options:
     * 'allowWatchBookmarks'	boolean
     * allowWatchBookmarks requests watch events with type "BOOKMARK". Servers that do
     * not implement bookmarks may ignore this flag and bookmarks are sent at the
     * server's discretion. Clients should not assume bookmarks are returned at any
     * specific interval, nor may they assume the server will send any BOOKMARK event
     * during a session. If this is not a watch, this field is ignored.
     * 'continue'	string
     * The continue option should be set when retrieving more results from the server.
     * Since this value is server defined, clients may only use the continue value from
     * a previous query result with identical query parameters (except for the value of
     * continue) and the server may reject a continue value it does not recognize. If
     * the specified continue value is no longer valid whether due to expiration
     * (generally five to fifteen minutes) or a configuration change on the server, the
     * server will respond with a 410 ResourceExpired error together with a continue
     * token. If the client needs a consistent list, it must restart their list without
     * the continue field. Otherwise, the client may send another list request with the
     * token received with the 410 error, the server will respond with a list starting
     * from the next key, but from the latest snapshot, which is inconsistent from the
     * previous list results - objects that are created, modified, or deleted after the
     * first list request will be included in the response, as long as their keys are
     * after the "next key".
     *
     * This field is not supported when watch is true. Clients may start a watch from
     * the last resourceVersion value returned by the server and not miss any
     * modifications.
     * 'fieldSelector'	string
     * A selector to restrict the list of returned objects by their fields. Defaults to
     * everything.
     * 'labelSelector'	string
     * A selector to restrict the list of returned objects by their labels. Defaults to
     * everything.
     * 'limit'	integer
     * limit is a maximum number of responses to return for a list call. If more items
     * exist, the server will set the `continue` field on the list metadata to a value
     * that can be used with the same initial query to retrieve the next set of
     * results. Setting a limit may return fewer than the requested amount of items (up
     * to zero items) in the event all requested objects are filtered out and clients
     * should only use the presence of the continue field to determine whether more
     * results are available. Servers may choose not to support the limit argument and
     * will return all of the available results. If limit is specified and the continue
     * field is empty, clients may assume that no more results are available. This
     * field is not supported if watch is true.
     *
     * The server guarantees that the objects returned when using continue will be
     * identical to issuing a single list call without a limit - that is, no objects
     * created, modified, or deleted after the first request is issued will be included
     * in any subsequent continued requests. This is sometimes referred to as a
     * consistent snapshot, and ensures that a client that is using limit to receive
     * smaller chunks of a very large result can ensure they see all possible objects.
     * If objects are updated during a chunked list the version of the object that was
     * present at the time the first list result was calculated is returned.
     * 'resourceVersion'	string
     * resourceVersion sets a constraint on what resource versions a request may be
     * served from. See
     * https://kubernetes.io/docs/reference/using-api/api-concepts/#resource-versions
     * for details.
     *
     * Defaults to unset
     * 'resourceVersionMatch'	string
     * resourceVersionMatch determines how resourceVersion is applied to list calls. It
     * is highly recommended that resourceVersionMatch be set for list calls where
     * resourceVersion is set See
     * https://kubernetes.io/docs/reference/using-api/api-concepts/#resource-versions
     * for details.
     *
     * Defaults to unset
     * 'timeoutSeconds'	integer
     * Timeout for the list/watch call. This limits the duration of the call,
     * regardless of any activity or inactivity.
     * 'watch'	boolean
     * Watch for changes to the described resources and return them as a stream of add,
     * update, and remove notifications. Specify resourceVersion.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return PodList|mixed
     */
    public function list(string $namespace, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods",
        		[
        			'query' => $queries,
        		]
        	),
        	'listCoreV1NamespacedPod'
        );
    }

    /**
     * create a Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param ThePod $Model
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
     * @return ThePod|mixed
     */
    public function create(string $namespace, \Kubernetes\Model\Io\K8s\Api\Core\V1\Pod $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createCoreV1NamespacedPod'
        );
    }

    /**
     * delete collection of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param DeleteOptions $Model
     * @param array $queries options:
     * 'continue'	string
     * The continue option should be set when retrieving more results from the server.
     * Since this value is server defined, clients may only use the continue value from
     * a previous query result with identical query parameters (except for the value of
     * continue) and the server may reject a continue value it does not recognize. If
     * the specified continue value is no longer valid whether due to expiration
     * (generally five to fifteen minutes) or a configuration change on the server, the
     * server will respond with a 410 ResourceExpired error together with a continue
     * token. If the client needs a consistent list, it must restart their list without
     * the continue field. Otherwise, the client may send another list request with the
     * token received with the 410 error, the server will respond with a list starting
     * from the next key, but from the latest snapshot, which is inconsistent from the
     * previous list results - objects that are created, modified, or deleted after the
     * first list request will be included in the response, as long as their keys are
     * after the "next key".
     *
     * This field is not supported when watch is true. Clients may start a watch from
     * the last resourceVersion value returned by the server and not miss any
     * modifications.
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'fieldSelector'	string
     * A selector to restrict the list of returned objects by their fields. Defaults to
     * everything.
     * 'gracePeriodSeconds'	integer
     * The duration in seconds before the object should be deleted. Value must be
     * non-negative integer. The value zero indicates delete immediately. If this value
     * is nil, the default grace period for the specified type will be used. Defaults
     * to a per object value if not specified. zero means delete immediately.
     * 'labelSelector'	string
     * A selector to restrict the list of returned objects by their labels. Defaults to
     * everything.
     * 'limit'	integer
     * limit is a maximum number of responses to return for a list call. If more items
     * exist, the server will set the `continue` field on the list metadata to a value
     * that can be used with the same initial query to retrieve the next set of
     * results. Setting a limit may return fewer than the requested amount of items (up
     * to zero items) in the event all requested objects are filtered out and clients
     * should only use the presence of the continue field to determine whether more
     * results are available. Servers may choose not to support the limit argument and
     * will return all of the available results. If limit is specified and the continue
     * field is empty, clients may assume that no more results are available. This
     * field is not supported if watch is true.
     *
     * The server guarantees that the objects returned when using continue will be
     * identical to issuing a single list call without a limit - that is, no objects
     * created, modified, or deleted after the first request is issued will be included
     * in any subsequent continued requests. This is sometimes referred to as a
     * consistent snapshot, and ensures that a client that is using limit to receive
     * smaller chunks of a very large result can ensure they see all possible objects.
     * If objects are updated during a chunked list the version of the object that was
     * present at the time the first list result was calculated is returned.
     * 'orphanDependents'	boolean
     * Deprecated: please use the PropagationPolicy, this field will be deprecated in
     * 1.7. Should the dependent objects be orphaned. If true/false, the "orphan"
     * finalizer will be added to/removed from the object's finalizers list. Either
     * this field or PropagationPolicy may be set, but not both.
     * 'propagationPolicy'	string
     * Whether and how garbage collection will be performed. Either this field or
     * OrphanDependents may be set, but not both. The default policy is decided by the
     * existing finalizer set in the metadata.finalizers and the resource-specific
     * default policy. Acceptable values are: 'Orphan' - orphan the dependents;
     * 'Background' - allow the garbage collector to delete the dependents in the
     * background; 'Foreground' - a cascading policy that deletes all dependents in the
     * foreground.
     * 'resourceVersion'	string
     * resourceVersion sets a constraint on what resource versions a request may be
     * served from. See
     * https://kubernetes.io/docs/reference/using-api/api-concepts/#resource-versions
     * for details.
     *
     * Defaults to unset
     * 'resourceVersionMatch'	string
     * resourceVersionMatch determines how resourceVersion is applied to list calls. It
     * is highly recommended that resourceVersionMatch be set for list calls where
     * resourceVersion is set See
     * https://kubernetes.io/docs/reference/using-api/api-concepts/#resource-versions
     * for details.
     *
     * Defaults to unset
     * 'timeoutSeconds'	integer
     * Timeout for the list/watch call. This limits the duration of the call,
     * regardless of any activity or inactivity.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return Status|mixed
     */
    public function deleteCollection(string $namespace, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/pods",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'deleteCoreV1CollectionNamespacedPod'
        );
    }

    /**
     * read the specified Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return ThePod|mixed
     */
    public function read(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'readCoreV1NamespacedPod'
        );
    }

    /**
     * replace the specified Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param ThePod $Model
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
     * @return ThePod|mixed
     */
    public function replace(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Api\Core\V1\Pod $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceCoreV1NamespacedPod'
        );
    }

    /**
     * delete a Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param DeleteOptions $Model
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'gracePeriodSeconds'	integer
     * The duration in seconds before the object should be deleted. Value must be
     * non-negative integer. The value zero indicates delete immediately. If this value
     * is nil, the default grace period for the specified type will be used. Defaults
     * to a per object value if not specified. zero means delete immediately.
     * 'orphanDependents'	boolean
     * Deprecated: please use the PropagationPolicy, this field will be deprecated in
     * 1.7. Should the dependent objects be orphaned. If true/false, the "orphan"
     * finalizer will be added to/removed from the object's finalizers list. Either
     * this field or PropagationPolicy may be set, but not both.
     * 'propagationPolicy'	string
     * Whether and how garbage collection will be performed. Either this field or
     * OrphanDependents may be set, but not both. The default policy is decided by the
     * existing finalizer set in the metadata.finalizers and the resource-specific
     * default policy. Acceptable values are: 'Orphan' - orphan the dependents;
     * 'Background' - allow the garbage collector to delete the dependents in the
     * background; 'Foreground' - a cascading policy that deletes all dependents in the
     * foreground.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return ThePod|mixed
     */
    public function delete(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'deleteCoreV1NamespacedPod'
        );
    }

    /**
     * partially update the specified Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
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
     * @return ThePod|mixed
     */
    public function patch(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'patchCoreV1NamespacedPod'
        );
    }

    /**
     * read ephemeralcontainers of the specified Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return ThePod|mixed
     */
    public function readEphemeralcontainers(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/ephemeralcontainers",
        		[
        			'query' => $queries,
        		]
        	),
        	'readCoreV1NamespacedPodEphemeralcontainers'
        );
    }

    /**
     * replace ephemeralcontainers of the specified Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param ThePod $Model
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
     * @return ThePod|mixed
     */
    public function replaceEphemeralcontainers(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Api\Core\V1\Pod $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/ephemeralcontainers",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceCoreV1NamespacedPodEphemeralcontainers'
        );
    }

    /**
     * partially update ephemeralcontainers of the specified Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
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
     * @return ThePod|mixed
     */
    public function patchEphemeralcontainers(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/ephemeralcontainers",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'patchCoreV1NamespacedPodEphemeralcontainers'
        );
    }

    /**
     * read log of the specified Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param array $queries options:
     * 'container'	string
     * The container for which to stream logs. Defaults to only container if there is
     * one container in the pod.
     * 'follow'	boolean
     * Follow the log stream of the pod. Defaults to false.
     * 'insecureSkipTLSVerifyBackend'	boolean
     * insecureSkipTLSVerifyBackend indicates that the apiserver should not confirm the
     * validity of the serving certificate of the backend it is connecting to.  This
     * will make the HTTPS connection between the apiserver and the backend insecure.
     * This means the apiserver cannot verify the log data it is receiving came from
     * the real kubelet.  If the kubelet is configured to verify the apiserver's TLS
     * credentials, it does not mean the connection to the real kubelet is vulnerable
     * to a man in the middle attack (e.g. an attacker could not intercept the actual
     * log data coming from the real kubelet).
     * 'limitBytes'	integer
     * If set, the number of bytes to read from the server before terminating the log
     * output. This may not display a complete final line of logging, and may return
     * slightly more or slightly less than the specified limit.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     * 'previous'	boolean
     * Return previous terminated container logs. Defaults to false.
     * 'sinceSeconds'	integer
     * A relative time in seconds before the current time from which to show logs. If
     * this value precedes the time a pod was started, only logs since the pod start
     * will be returned. If this value is in the future, no logs will be returned. Only
     * one of sinceSeconds or sinceTime may be specified.
     * 'tailLines'	integer
     * If set, the number of lines from the end of the logs to show. If not specified,
     * logs are shown from the creation of the container or sinceSeconds or sinceTime
     * 'timestamps'	boolean
     * If true, add an RFC3339 or RFC3339Nano timestamp at the beginning of every line
     * of log output. Defaults to false.
     *
     * @return string|mixed
     */
    public function readLog(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/log",
        		[
        			'query' => $queries,
        		]
        	),
        	'readCoreV1NamespacedPodLog'
        );
    }

    /**
     * read status of the specified Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return ThePod|mixed
     */
    public function readStatus(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/status",
        		[
        			'query' => $queries,
        		]
        	),
        	'readCoreV1NamespacedPodStatus'
        );
    }

    /**
     * replace status of the specified Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param ThePod $Model
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
     * @return ThePod|mixed
     */
    public function replaceStatus(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Api\Core\V1\Pod $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceCoreV1NamespacedPodStatus'
        );
    }

    /**
     * partially update status of the specified Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
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
     * @return ThePod|mixed
     */
    public function patchStatus(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'patchCoreV1NamespacedPodStatus'
        );
    }

    /**
     * list or watch objects of kind Pod
     *
     * @param array $queries options:
     * 'allowWatchBookmarks'	boolean
     * allowWatchBookmarks requests watch events with type "BOOKMARK". Servers that do
     * not implement bookmarks may ignore this flag and bookmarks are sent at the
     * server's discretion. Clients should not assume bookmarks are returned at any
     * specific interval, nor may they assume the server will send any BOOKMARK event
     * during a session. If this is not a watch, this field is ignored.
     * 'continue'	string
     * The continue option should be set when retrieving more results from the server.
     * Since this value is server defined, clients may only use the continue value from
     * a previous query result with identical query parameters (except for the value of
     * continue) and the server may reject a continue value it does not recognize. If
     * the specified continue value is no longer valid whether due to expiration
     * (generally five to fifteen minutes) or a configuration change on the server, the
     * server will respond with a 410 ResourceExpired error together with a continue
     * token. If the client needs a consistent list, it must restart their list without
     * the continue field. Otherwise, the client may send another list request with the
     * token received with the 410 error, the server will respond with a list starting
     * from the next key, but from the latest snapshot, which is inconsistent from the
     * previous list results - objects that are created, modified, or deleted after the
     * first list request will be included in the response, as long as their keys are
     * after the "next key".
     *
     * This field is not supported when watch is true. Clients may start a watch from
     * the last resourceVersion value returned by the server and not miss any
     * modifications.
     * 'fieldSelector'	string
     * A selector to restrict the list of returned objects by their fields. Defaults to
     * everything.
     * 'labelSelector'	string
     * A selector to restrict the list of returned objects by their labels. Defaults to
     * everything.
     * 'limit'	integer
     * limit is a maximum number of responses to return for a list call. If more items
     * exist, the server will set the `continue` field on the list metadata to a value
     * that can be used with the same initial query to retrieve the next set of
     * results. Setting a limit may return fewer than the requested amount of items (up
     * to zero items) in the event all requested objects are filtered out and clients
     * should only use the presence of the continue field to determine whether more
     * results are available. Servers may choose not to support the limit argument and
     * will return all of the available results. If limit is specified and the continue
     * field is empty, clients may assume that no more results are available. This
     * field is not supported if watch is true.
     *
     * The server guarantees that the objects returned when using continue will be
     * identical to issuing a single list call without a limit - that is, no objects
     * created, modified, or deleted after the first request is issued will be included
     * in any subsequent continued requests. This is sometimes referred to as a
     * consistent snapshot, and ensures that a client that is using limit to receive
     * smaller chunks of a very large result can ensure they see all possible objects.
     * If objects are updated during a chunked list the version of the object that was
     * present at the time the first list result was calculated is returned.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     * 'resourceVersion'	string
     * resourceVersion sets a constraint on what resource versions a request may be
     * served from. See
     * https://kubernetes.io/docs/reference/using-api/api-concepts/#resource-versions
     * for details.
     *
     * Defaults to unset
     * 'resourceVersionMatch'	string
     * resourceVersionMatch determines how resourceVersion is applied to list calls. It
     * is highly recommended that resourceVersionMatch be set for list calls where
     * resourceVersion is set See
     * https://kubernetes.io/docs/reference/using-api/api-concepts/#resource-versions
     * for details.
     *
     * Defaults to unset
     * 'timeoutSeconds'	integer
     * Timeout for the list/watch call. This limits the duration of the call,
     * regardless of any activity or inactivity.
     * 'watch'	boolean
     * Watch for changes to the described resources and return them as a stream of add,
     * update, and remove notifications. Specify resourceVersion.
     *
     * @return PodList|mixed
     */
    public function listForAllNamespaces(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/pods",
        		[
        			'query' => $queries,
        		]
        	),
        	'listCoreV1PodForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Pod. deprecated: use the 'watch' parameter
     * with a list operation instead.
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param array $queries options:
     * 'allowWatchBookmarks'	boolean
     * allowWatchBookmarks requests watch events with type "BOOKMARK". Servers that do
     * not implement bookmarks may ignore this flag and bookmarks are sent at the
     * server's discretion. Clients should not assume bookmarks are returned at any
     * specific interval, nor may they assume the server will send any BOOKMARK event
     * during a session. If this is not a watch, this field is ignored.
     * 'continue'	string
     * The continue option should be set when retrieving more results from the server.
     * Since this value is server defined, clients may only use the continue value from
     * a previous query result with identical query parameters (except for the value of
     * continue) and the server may reject a continue value it does not recognize. If
     * the specified continue value is no longer valid whether due to expiration
     * (generally five to fifteen minutes) or a configuration change on the server, the
     * server will respond with a 410 ResourceExpired error together with a continue
     * token. If the client needs a consistent list, it must restart their list without
     * the continue field. Otherwise, the client may send another list request with the
     * token received with the 410 error, the server will respond with a list starting
     * from the next key, but from the latest snapshot, which is inconsistent from the
     * previous list results - objects that are created, modified, or deleted after the
     * first list request will be included in the response, as long as their keys are
     * after the "next key".
     *
     * This field is not supported when watch is true. Clients may start a watch from
     * the last resourceVersion value returned by the server and not miss any
     * modifications.
     * 'fieldSelector'	string
     * A selector to restrict the list of returned objects by their fields. Defaults to
     * everything.
     * 'labelSelector'	string
     * A selector to restrict the list of returned objects by their labels. Defaults to
     * everything.
     * 'limit'	integer
     * limit is a maximum number of responses to return for a list call. If more items
     * exist, the server will set the `continue` field on the list metadata to a value
     * that can be used with the same initial query to retrieve the next set of
     * results. Setting a limit may return fewer than the requested amount of items (up
     * to zero items) in the event all requested objects are filtered out and clients
     * should only use the presence of the continue field to determine whether more
     * results are available. Servers may choose not to support the limit argument and
     * will return all of the available results. If limit is specified and the continue
     * field is empty, clients may assume that no more results are available. This
     * field is not supported if watch is true.
     *
     * The server guarantees that the objects returned when using continue will be
     * identical to issuing a single list call without a limit - that is, no objects
     * created, modified, or deleted after the first request is issued will be included
     * in any subsequent continued requests. This is sometimes referred to as a
     * consistent snapshot, and ensures that a client that is using limit to receive
     * smaller chunks of a very large result can ensure they see all possible objects.
     * If objects are updated during a chunked list the version of the object that was
     * present at the time the first list result was calculated is returned.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     * 'resourceVersion'	string
     * resourceVersion sets a constraint on what resource versions a request may be
     * served from. See
     * https://kubernetes.io/docs/reference/using-api/api-concepts/#resource-versions
     * for details.
     *
     * Defaults to unset
     * 'resourceVersionMatch'	string
     * resourceVersionMatch determines how resourceVersion is applied to list calls. It
     * is highly recommended that resourceVersionMatch be set for list calls where
     * resourceVersion is set See
     * https://kubernetes.io/docs/reference/using-api/api-concepts/#resource-versions
     * for details.
     *
     * Defaults to unset
     * 'timeoutSeconds'	integer
     * Timeout for the list/watch call. This limits the duration of the call,
     * regardless of any activity or inactivity.
     * 'watch'	boolean
     * Watch for changes to the described resources and return them as a stream of add,
     * update, and remove notifications. Specify resourceVersion.
     *
     * @return WatchEvent|mixed
     */
    public function watchList(string $namespace, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/pods",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchCoreV1NamespacedPodList'
        );
    }

    /**
     * watch changes to an object of kind Pod. deprecated: use the 'watch' parameter
     * with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param array $queries options:
     * 'allowWatchBookmarks'	boolean
     * allowWatchBookmarks requests watch events with type "BOOKMARK". Servers that do
     * not implement bookmarks may ignore this flag and bookmarks are sent at the
     * server's discretion. Clients should not assume bookmarks are returned at any
     * specific interval, nor may they assume the server will send any BOOKMARK event
     * during a session. If this is not a watch, this field is ignored.
     * 'continue'	string
     * The continue option should be set when retrieving more results from the server.
     * Since this value is server defined, clients may only use the continue value from
     * a previous query result with identical query parameters (except for the value of
     * continue) and the server may reject a continue value it does not recognize. If
     * the specified continue value is no longer valid whether due to expiration
     * (generally five to fifteen minutes) or a configuration change on the server, the
     * server will respond with a 410 ResourceExpired error together with a continue
     * token. If the client needs a consistent list, it must restart their list without
     * the continue field. Otherwise, the client may send another list request with the
     * token received with the 410 error, the server will respond with a list starting
     * from the next key, but from the latest snapshot, which is inconsistent from the
     * previous list results - objects that are created, modified, or deleted after the
     * first list request will be included in the response, as long as their keys are
     * after the "next key".
     *
     * This field is not supported when watch is true. Clients may start a watch from
     * the last resourceVersion value returned by the server and not miss any
     * modifications.
     * 'fieldSelector'	string
     * A selector to restrict the list of returned objects by their fields. Defaults to
     * everything.
     * 'labelSelector'	string
     * A selector to restrict the list of returned objects by their labels. Defaults to
     * everything.
     * 'limit'	integer
     * limit is a maximum number of responses to return for a list call. If more items
     * exist, the server will set the `continue` field on the list metadata to a value
     * that can be used with the same initial query to retrieve the next set of
     * results. Setting a limit may return fewer than the requested amount of items (up
     * to zero items) in the event all requested objects are filtered out and clients
     * should only use the presence of the continue field to determine whether more
     * results are available. Servers may choose not to support the limit argument and
     * will return all of the available results. If limit is specified and the continue
     * field is empty, clients may assume that no more results are available. This
     * field is not supported if watch is true.
     *
     * The server guarantees that the objects returned when using continue will be
     * identical to issuing a single list call without a limit - that is, no objects
     * created, modified, or deleted after the first request is issued will be included
     * in any subsequent continued requests. This is sometimes referred to as a
     * consistent snapshot, and ensures that a client that is using limit to receive
     * smaller chunks of a very large result can ensure they see all possible objects.
     * If objects are updated during a chunked list the version of the object that was
     * present at the time the first list result was calculated is returned.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     * 'resourceVersion'	string
     * resourceVersion sets a constraint on what resource versions a request may be
     * served from. See
     * https://kubernetes.io/docs/reference/using-api/api-concepts/#resource-versions
     * for details.
     *
     * Defaults to unset
     * 'resourceVersionMatch'	string
     * resourceVersionMatch determines how resourceVersion is applied to list calls. It
     * is highly recommended that resourceVersionMatch be set for list calls where
     * resourceVersion is set See
     * https://kubernetes.io/docs/reference/using-api/api-concepts/#resource-versions
     * for details.
     *
     * Defaults to unset
     * 'timeoutSeconds'	integer
     * Timeout for the list/watch call. This limits the duration of the call,
     * regardless of any activity or inactivity.
     * 'watch'	boolean
     * Watch for changes to the described resources and return them as a stream of add,
     * update, and remove notifications. Specify resourceVersion.
     *
     * @return WatchEvent|mixed
     */
    public function watch(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/pods/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchCoreV1NamespacedPod'
        );
    }

    /**
     * watch individual changes to a list of Pod. deprecated: use the 'watch' parameter
     * with a list operation instead.
     *
     * @param array $queries options:
     * 'allowWatchBookmarks'	boolean
     * allowWatchBookmarks requests watch events with type "BOOKMARK". Servers that do
     * not implement bookmarks may ignore this flag and bookmarks are sent at the
     * server's discretion. Clients should not assume bookmarks are returned at any
     * specific interval, nor may they assume the server will send any BOOKMARK event
     * during a session. If this is not a watch, this field is ignored.
     * 'continue'	string
     * The continue option should be set when retrieving more results from the server.
     * Since this value is server defined, clients may only use the continue value from
     * a previous query result with identical query parameters (except for the value of
     * continue) and the server may reject a continue value it does not recognize. If
     * the specified continue value is no longer valid whether due to expiration
     * (generally five to fifteen minutes) or a configuration change on the server, the
     * server will respond with a 410 ResourceExpired error together with a continue
     * token. If the client needs a consistent list, it must restart their list without
     * the continue field. Otherwise, the client may send another list request with the
     * token received with the 410 error, the server will respond with a list starting
     * from the next key, but from the latest snapshot, which is inconsistent from the
     * previous list results - objects that are created, modified, or deleted after the
     * first list request will be included in the response, as long as their keys are
     * after the "next key".
     *
     * This field is not supported when watch is true. Clients may start a watch from
     * the last resourceVersion value returned by the server and not miss any
     * modifications.
     * 'fieldSelector'	string
     * A selector to restrict the list of returned objects by their fields. Defaults to
     * everything.
     * 'labelSelector'	string
     * A selector to restrict the list of returned objects by their labels. Defaults to
     * everything.
     * 'limit'	integer
     * limit is a maximum number of responses to return for a list call. If more items
     * exist, the server will set the `continue` field on the list metadata to a value
     * that can be used with the same initial query to retrieve the next set of
     * results. Setting a limit may return fewer than the requested amount of items (up
     * to zero items) in the event all requested objects are filtered out and clients
     * should only use the presence of the continue field to determine whether more
     * results are available. Servers may choose not to support the limit argument and
     * will return all of the available results. If limit is specified and the continue
     * field is empty, clients may assume that no more results are available. This
     * field is not supported if watch is true.
     *
     * The server guarantees that the objects returned when using continue will be
     * identical to issuing a single list call without a limit - that is, no objects
     * created, modified, or deleted after the first request is issued will be included
     * in any subsequent continued requests. This is sometimes referred to as a
     * consistent snapshot, and ensures that a client that is using limit to receive
     * smaller chunks of a very large result can ensure they see all possible objects.
     * If objects are updated during a chunked list the version of the object that was
     * present at the time the first list result was calculated is returned.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     * 'resourceVersion'	string
     * resourceVersion sets a constraint on what resource versions a request may be
     * served from. See
     * https://kubernetes.io/docs/reference/using-api/api-concepts/#resource-versions
     * for details.
     *
     * Defaults to unset
     * 'resourceVersionMatch'	string
     * resourceVersionMatch determines how resourceVersion is applied to list calls. It
     * is highly recommended that resourceVersionMatch be set for list calls where
     * resourceVersion is set See
     * https://kubernetes.io/docs/reference/using-api/api-concepts/#resource-versions
     * for details.
     *
     * Defaults to unset
     * 'timeoutSeconds'	integer
     * Timeout for the list/watch call. This limits the duration of the call,
     * regardless of any activity or inactivity.
     * 'watch'	boolean
     * Watch for changes to the described resources and return them as a stream of add,
     * update, and remove notifications. Specify resourceVersion.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/pods",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchCoreV1PodListForAllNamespaces'
        );
    }
}


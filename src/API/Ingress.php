<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Networking\V1\IngressList as IngressList;
use \Kubernetes\Model\Io\K8s\Api\Networking\V1\Ingress as TheIngress;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class Ingress extends AbstractAPI
{
    /**
     * list or watch objects of kind Ingress
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
     * @return IngressList|mixed
     */
    public function listForAllNamespaces(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/ingresses",
        		[
        			'query' => $queries,
        		]
        	),
        	'listNetworkingV1IngressForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Ingress
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
     * @return IngressList|mixed
     */
    public function list(string $namespace, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/namespaces/{$namespace}/ingresses",
        		[
        			'query' => $queries,
        		]
        	),
        	'listNetworkingV1NamespacedIngress'
        );
    }

    /**
     * create an Ingress
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param TheIngress $Model
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
     * @return TheIngress|mixed
     */
    public function create(string $namespace, \Kubernetes\Model\Io\K8s\Api\Networking\V1\Ingress $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/networking.k8s.io/v1/namespaces/{$namespace}/ingresses",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createNetworkingV1NamespacedIngress'
        );
    }

    /**
     * delete collection of Ingress
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
        		"/apis/networking.k8s.io/v1/namespaces/{$namespace}/ingresses",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'deleteNetworkingV1CollectionNamespacedIngress'
        );
    }

    /**
     * read the specified Ingress
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Ingress
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheIngress|mixed
     */
    public function read(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/namespaces/{$namespace}/ingresses/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'readNetworkingV1NamespacedIngress'
        );
    }

    /**
     * replace the specified Ingress
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Ingress
     * @param TheIngress $Model
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
     * @return TheIngress|mixed
     */
    public function replace(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Api\Networking\V1\Ingress $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/networking.k8s.io/v1/namespaces/{$namespace}/ingresses/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceNetworkingV1NamespacedIngress'
        );
    }

    /**
     * delete an Ingress
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Ingress
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
     * @return Status|mixed
     */
    public function delete(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/networking.k8s.io/v1/namespaces/{$namespace}/ingresses/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'deleteNetworkingV1NamespacedIngress'
        );
    }

    /**
     * partially update the specified Ingress
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Ingress
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
     * @return TheIngress|mixed
     */
    public function patch(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/networking.k8s.io/v1/namespaces/{$namespace}/ingresses/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'patchNetworkingV1NamespacedIngress'
        );
    }

    /**
     * read status of the specified Ingress
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Ingress
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheIngress|mixed
     */
    public function readStatus(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/namespaces/{$namespace}/ingresses/{$name}/status",
        		[
        			'query' => $queries,
        		]
        	),
        	'readNetworkingV1NamespacedIngressStatus'
        );
    }

    /**
     * replace status of the specified Ingress
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Ingress
     * @param TheIngress $Model
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
     * @return TheIngress|mixed
     */
    public function replaceStatus(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Api\Networking\V1\Ingress $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/networking.k8s.io/v1/namespaces/{$namespace}/ingresses/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceNetworkingV1NamespacedIngressStatus'
        );
    }

    /**
     * partially update status of the specified Ingress
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Ingress
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
     * @return TheIngress|mixed
     */
    public function patchStatus(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/networking.k8s.io/v1/namespaces/{$namespace}/ingresses/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'patchNetworkingV1NamespacedIngressStatus'
        );
    }

    /**
     * watch individual changes to a list of Ingress. deprecated: use the 'watch'
     * parameter with a list operation instead.
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
        		"/apis/networking.k8s.io/v1/watch/ingresses",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchNetworkingV1IngressListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Ingress. deprecated: use the 'watch'
     * parameter with a list operation instead.
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
        		"/apis/networking.k8s.io/v1/watch/namespaces/{$namespace}/ingresses",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchNetworkingV1NamespacedIngressList'
        );
    }

    /**
     * watch changes to an object of kind Ingress. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Ingress
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
        		"/apis/networking.k8s.io/v1/watch/namespaces/{$namespace}/ingresses/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchNetworkingV1NamespacedIngress'
        );
    }
}


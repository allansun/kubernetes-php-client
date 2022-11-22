<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\EventList as EventList;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\Event as TheEvent;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Events\V1\EventList as EventListV1;
use \Kubernetes\Model\Io\K8s\Api\Events\V1\Event as TheEventV1;
use \Kubernetes\Model\Io\K8s\Api\Events\V1beta1\EventList as EventListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Events\V1beta1\Event as TheEventV1beta1;

class Event extends AbstractAPI
{

    /**
     * list or watch objects of kind Event
     *
     * @param array $queries options:
     * 'allowWatchBookmarks'	boolean
     * allowWatchBookmarks requests watch events with type "BOOKMARK". Servers that do
     * not implement bookmarks may ignore this flag and bookmarks are sent at the
     * server's discretion. Clients should not assume bookmarks are returned at any
     * specific interval, nor may they assume the server will send any BOOKMARK event
     * during a session. If this is not a watch, this field is ignored. If the feature
     * gate WatchBookmarks is not enabled in apiserver, this field is ignored.
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
     * @return EventList|mixed
     */
    public function listForAllNamespaces(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/events",
        		[
        			'query' => $queries,
        		]
        	),
        	'listCoreV1EventForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Event
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param array $queries options:
     * 'allowWatchBookmarks'	boolean
     * allowWatchBookmarks requests watch events with type "BOOKMARK". Servers that do
     * not implement bookmarks may ignore this flag and bookmarks are sent at the
     * server's discretion. Clients should not assume bookmarks are returned at any
     * specific interval, nor may they assume the server will send any BOOKMARK event
     * during a session. If this is not a watch, this field is ignored. If the feature
     * gate WatchBookmarks is not enabled in apiserver, this field is ignored.
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
     * @return EventList|mixed
     */
    public function list(string $namespace, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/events",
        		[
        			'query' => $queries,
        		]
        	),
        	'listCoreV1NamespacedEvent'
        );
    }

    /**
     * create an Event
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param TheEvent $Model
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
     * @return TheEvent|mixed
     */
    public function create(string $namespace, \Kubernetes\Model\Io\K8s\Api\Core\V1\Event $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/events",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createCoreV1NamespacedEvent'
        );
    }

    /**
     * delete collection of Event
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
        		"/api/v1/namespaces/{$namespace}/events",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'deleteCoreV1CollectionNamespacedEvent'
        );
    }

    /**
     * read the specified Event
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Event
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheEvent|mixed
     */
    public function read(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/events/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'readCoreV1NamespacedEvent'
        );
    }

    /**
     * replace the specified Event
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Event
     * @param TheEvent $Model
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
     * @return TheEvent|mixed
     */
    public function replace(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Api\Core\V1\Event $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/events/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceCoreV1NamespacedEvent'
        );
    }

    /**
     * delete an Event
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Event
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
        		"/api/v1/namespaces/{$namespace}/events/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'deleteCoreV1NamespacedEvent'
        );
    }

    /**
     * partially update the specified Event
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Event
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
     * 'force'	boolean
     * Force is going to "force" Apply requests. It means user will re-acquire
     * conflicting fields owned by other people. Force flag must be unset for non-apply
     * patch requests.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheEvent|mixed
     */
    public function patch(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/events/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'patchCoreV1NamespacedEvent'
        );
    }

    /**
     * watch individual changes to a list of Event. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param array $queries options:
     * 'allowWatchBookmarks'	boolean
     * allowWatchBookmarks requests watch events with type "BOOKMARK". Servers that do
     * not implement bookmarks may ignore this flag and bookmarks are sent at the
     * server's discretion. Clients should not assume bookmarks are returned at any
     * specific interval, nor may they assume the server will send any BOOKMARK event
     * during a session. If this is not a watch, this field is ignored. If the feature
     * gate WatchBookmarks is not enabled in apiserver, this field is ignored.
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
        		"/api/v1/watch/events",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchCoreV1EventListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Event. deprecated: use the 'watch'
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
     * during a session. If this is not a watch, this field is ignored. If the feature
     * gate WatchBookmarks is not enabled in apiserver, this field is ignored.
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
        		"/api/v1/watch/namespaces/{$namespace}/events",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchCoreV1NamespacedEventList'
        );
    }

    /**
     * watch changes to an object of kind Event. deprecated: use the 'watch' parameter
     * with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Event
     * @param array $queries options:
     * 'allowWatchBookmarks'	boolean
     * allowWatchBookmarks requests watch events with type "BOOKMARK". Servers that do
     * not implement bookmarks may ignore this flag and bookmarks are sent at the
     * server's discretion. Clients should not assume bookmarks are returned at any
     * specific interval, nor may they assume the server will send any BOOKMARK event
     * during a session. If this is not a watch, this field is ignored. If the feature
     * gate WatchBookmarks is not enabled in apiserver, this field is ignored.
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
        		"/api/v1/watch/namespaces/{$namespace}/events/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchCoreV1NamespacedEvent'
        );
    }

    /**
     * list or watch objects of kind Event
     *
     * @param array $queries options:
     * 'allowWatchBookmarks'	boolean
     * allowWatchBookmarks requests watch events with type "BOOKMARK". Servers that do
     * not implement bookmarks may ignore this flag and bookmarks are sent at the
     * server's discretion. Clients should not assume bookmarks are returned at any
     * specific interval, nor may they assume the server will send any BOOKMARK event
     * during a session. If this is not a watch, this field is ignored. If the feature
     * gate WatchBookmarks is not enabled in apiserver, this field is ignored.
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
     * @return EventListV1|mixed
     */
    public function listForAllNamespacesEventsV1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1/events",
        		[
        			'query' => $queries,
        		]
        	),
        	'listEventsV1EventForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Event
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param array $queries options:
     * 'allowWatchBookmarks'	boolean
     * allowWatchBookmarks requests watch events with type "BOOKMARK". Servers that do
     * not implement bookmarks may ignore this flag and bookmarks are sent at the
     * server's discretion. Clients should not assume bookmarks are returned at any
     * specific interval, nor may they assume the server will send any BOOKMARK event
     * during a session. If this is not a watch, this field is ignored. If the feature
     * gate WatchBookmarks is not enabled in apiserver, this field is ignored.
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
     * @return EventListV1|mixed
     */
    public function listEventsV1(string $namespace, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1/namespaces/{$namespace}/events",
        		[
        			'query' => $queries,
        		]
        	),
        	'listEventsV1NamespacedEvent'
        );
    }

    /**
     * create an Event
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param TheEventV1 $Model
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
     * @return TheEventV1|mixed
     */
    public function createEventsV1(string $namespace, \Kubernetes\Model\Io\K8s\Api\Events\V1\Event $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/events.k8s.io/v1/namespaces/{$namespace}/events",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createEventsV1NamespacedEvent'
        );
    }

    /**
     * delete collection of Event
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
    public function deleteCollectionEventsV1(string $namespace, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/events.k8s.io/v1/namespaces/{$namespace}/events",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'deleteEventsV1CollectionNamespacedEvent'
        );
    }

    /**
     * read the specified Event
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Event
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheEventV1|mixed
     */
    public function readEventsV1(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1/namespaces/{$namespace}/events/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'readEventsV1NamespacedEvent'
        );
    }

    /**
     * replace the specified Event
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Event
     * @param TheEventV1 $Model
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
     * @return TheEventV1|mixed
     */
    public function replaceEventsV1(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Api\Events\V1\Event $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/events.k8s.io/v1/namespaces/{$namespace}/events/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceEventsV1NamespacedEvent'
        );
    }

    /**
     * delete an Event
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Event
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
    public function deleteEventsV1(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/events.k8s.io/v1/namespaces/{$namespace}/events/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'deleteEventsV1NamespacedEvent'
        );
    }

    /**
     * partially update the specified Event
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Event
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
     * 'force'	boolean
     * Force is going to "force" Apply requests. It means user will re-acquire
     * conflicting fields owned by other people. Force flag must be unset for non-apply
     * patch requests.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheEventV1|mixed
     */
    public function patchEventsV1(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/events.k8s.io/v1/namespaces/{$namespace}/events/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'patchEventsV1NamespacedEvent'
        );
    }

    /**
     * watch individual changes to a list of Event. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param array $queries options:
     * 'allowWatchBookmarks'	boolean
     * allowWatchBookmarks requests watch events with type "BOOKMARK". Servers that do
     * not implement bookmarks may ignore this flag and bookmarks are sent at the
     * server's discretion. Clients should not assume bookmarks are returned at any
     * specific interval, nor may they assume the server will send any BOOKMARK event
     * during a session. If this is not a watch, this field is ignored. If the feature
     * gate WatchBookmarks is not enabled in apiserver, this field is ignored.
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
    public function watchListForAllNamespacesEventsV1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1/watch/events",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchEventsV1EventListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Event. deprecated: use the 'watch'
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
     * during a session. If this is not a watch, this field is ignored. If the feature
     * gate WatchBookmarks is not enabled in apiserver, this field is ignored.
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
    public function watchListEventsV1(string $namespace, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1/watch/namespaces/{$namespace}/events",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchEventsV1NamespacedEventList'
        );
    }

    /**
     * watch changes to an object of kind Event. deprecated: use the 'watch' parameter
     * with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Event
     * @param array $queries options:
     * 'allowWatchBookmarks'	boolean
     * allowWatchBookmarks requests watch events with type "BOOKMARK". Servers that do
     * not implement bookmarks may ignore this flag and bookmarks are sent at the
     * server's discretion. Clients should not assume bookmarks are returned at any
     * specific interval, nor may they assume the server will send any BOOKMARK event
     * during a session. If this is not a watch, this field is ignored. If the feature
     * gate WatchBookmarks is not enabled in apiserver, this field is ignored.
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
    public function watchEventsV1(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1/watch/namespaces/{$namespace}/events/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchEventsV1NamespacedEvent'
        );
    }

    /**
     * list or watch objects of kind Event
     *
     * @param array $queries options:
     * 'allowWatchBookmarks'	boolean
     * allowWatchBookmarks requests watch events with type "BOOKMARK". Servers that do
     * not implement bookmarks may ignore this flag and bookmarks are sent at the
     * server's discretion. Clients should not assume bookmarks are returned at any
     * specific interval, nor may they assume the server will send any BOOKMARK event
     * during a session. If this is not a watch, this field is ignored. If the feature
     * gate WatchBookmarks is not enabled in apiserver, this field is ignored.
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
     * @return EventListV1beta1|mixed
     */
    public function listForAllNamespacesEventsV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1beta1/events",
        		[
        			'query' => $queries,
        		]
        	),
        	'listEventsV1beta1EventForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Event
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param array $queries options:
     * 'allowWatchBookmarks'	boolean
     * allowWatchBookmarks requests watch events with type "BOOKMARK". Servers that do
     * not implement bookmarks may ignore this flag and bookmarks are sent at the
     * server's discretion. Clients should not assume bookmarks are returned at any
     * specific interval, nor may they assume the server will send any BOOKMARK event
     * during a session. If this is not a watch, this field is ignored. If the feature
     * gate WatchBookmarks is not enabled in apiserver, this field is ignored.
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
     * @return EventListV1beta1|mixed
     */
    public function listEventsV1beta1(string $namespace, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1beta1/namespaces/{$namespace}/events",
        		[
        			'query' => $queries,
        		]
        	),
        	'listEventsV1beta1NamespacedEvent'
        );
    }

    /**
     * create an Event
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param TheEventV1beta1 $Model
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
     * @return TheEventV1beta1|mixed
     */
    public function createEventsV1beta1(string $namespace, \Kubernetes\Model\Io\K8s\Api\Events\V1beta1\Event $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/events.k8s.io/v1beta1/namespaces/{$namespace}/events",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createEventsV1beta1NamespacedEvent'
        );
    }

    /**
     * delete collection of Event
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
    public function deleteCollectionEventsV1beta1(string $namespace, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/events.k8s.io/v1beta1/namespaces/{$namespace}/events",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'deleteEventsV1beta1CollectionNamespacedEvent'
        );
    }

    /**
     * read the specified Event
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Event
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheEventV1beta1|mixed
     */
    public function readEventsV1beta1(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1beta1/namespaces/{$namespace}/events/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'readEventsV1beta1NamespacedEvent'
        );
    }

    /**
     * replace the specified Event
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Event
     * @param TheEventV1beta1 $Model
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
     * @return TheEventV1beta1|mixed
     */
    public function replaceEventsV1beta1(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Api\Events\V1beta1\Event $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/events.k8s.io/v1beta1/namespaces/{$namespace}/events/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceEventsV1beta1NamespacedEvent'
        );
    }

    /**
     * delete an Event
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Event
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
    public function deleteEventsV1beta1(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/events.k8s.io/v1beta1/namespaces/{$namespace}/events/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'deleteEventsV1beta1NamespacedEvent'
        );
    }

    /**
     * partially update the specified Event
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Event
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
     * 'force'	boolean
     * Force is going to "force" Apply requests. It means user will re-acquire
     * conflicting fields owned by other people. Force flag must be unset for non-apply
     * patch requests.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheEventV1beta1|mixed
     */
    public function patchEventsV1beta1(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/events.k8s.io/v1beta1/namespaces/{$namespace}/events/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'patchEventsV1beta1NamespacedEvent'
        );
    }

    /**
     * watch individual changes to a list of Event. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param array $queries options:
     * 'allowWatchBookmarks'	boolean
     * allowWatchBookmarks requests watch events with type "BOOKMARK". Servers that do
     * not implement bookmarks may ignore this flag and bookmarks are sent at the
     * server's discretion. Clients should not assume bookmarks are returned at any
     * specific interval, nor may they assume the server will send any BOOKMARK event
     * during a session. If this is not a watch, this field is ignored. If the feature
     * gate WatchBookmarks is not enabled in apiserver, this field is ignored.
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
    public function watchListForAllNamespacesEventsV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1beta1/watch/events",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchEventsV1beta1EventListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Event. deprecated: use the 'watch'
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
     * during a session. If this is not a watch, this field is ignored. If the feature
     * gate WatchBookmarks is not enabled in apiserver, this field is ignored.
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
    public function watchListEventsV1beta1(string $namespace, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1beta1/watch/namespaces/{$namespace}/events",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchEventsV1beta1NamespacedEventList'
        );
    }

    /**
     * watch changes to an object of kind Event. deprecated: use the 'watch' parameter
     * with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Event
     * @param array $queries options:
     * 'allowWatchBookmarks'	boolean
     * allowWatchBookmarks requests watch events with type "BOOKMARK". Servers that do
     * not implement bookmarks may ignore this flag and bookmarks are sent at the
     * server's discretion. Clients should not assume bookmarks are returned at any
     * specific interval, nor may they assume the server will send any BOOKMARK event
     * during a session. If this is not a watch, this field is ignored. If the feature
     * gate WatchBookmarks is not enabled in apiserver, this field is ignored.
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
    public function watchEventsV1beta1(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1beta1/watch/namespaces/{$namespace}/events/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchEventsV1beta1NamespacedEvent'
        );
    }


}


<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Kube_aggregator\Pkg\Apis\Apiregistration\V1\APIServiceList as APIServiceList;
use \Kubernetes\Model\Io\K8s\Kube_aggregator\Pkg\Apis\Apiregistration\V1\APIService as TheAPIService;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Kube_aggregator\Pkg\Apis\Apiregistration\V1beta1\APIServiceList as APIServiceListV1beta1;
use \Kubernetes\Model\Io\K8s\Kube_aggregator\Pkg\Apis\Apiregistration\V1beta1\APIService as TheAPIServiceV1beta1;

class APIService extends AbstractAPI
{

    /**
     * list or watch objects of kind APIService
     *
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
     * When specified with a watch call, shows changes that occur after that particular
     * version of a resource. Defaults to changes from the beginning of history. When
     * specified for list: - if unset, then the result is returned from remote storage
     * based on quorum-read flag; - if it's 0, then we simply return what we currently
     * have in cache, no guarantee; - if set to non zero, then the result is at least
     * as fresh as given rv.
     * 'timeoutSeconds'	integer
     * Timeout for the list/watch call. This limits the duration of the call,
     * regardless of any activity or inactivity.
     * 'watch'	boolean
     * Watch for changes to the described resources and return them as a stream of add,
     * update, and remove notifications. Specify resourceVersion.
     * 'includeUninitialized'	boolean
     * If true, partially initialized resources are included in the response.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return APIServiceList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiregistration.k8s.io/v1/apiservices",
        		[
        			'query' => $queries,
        		]
        	),
        	'listApiregistrationV1APIService'
        );
    }

    /**
     * create an APIService
     *
     * @param TheAPIService $Model
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'includeUninitialized'	boolean
     * If true, partially initialized resources are included in the response.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheAPIService|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Kube_aggregator\Pkg\Apis\Apiregistration\V1\APIService $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apiregistration.k8s.io/v1/apiservices",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createApiregistrationV1APIService'
        );
    }

    /**
     * delete collection of APIService
     *
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
     * When specified with a watch call, shows changes that occur after that particular
     * version of a resource. Defaults to changes from the beginning of history. When
     * specified for list: - if unset, then the result is returned from remote storage
     * based on quorum-read flag; - if it's 0, then we simply return what we currently
     * have in cache, no guarantee; - if set to non zero, then the result is at least
     * as fresh as given rv.
     * 'timeoutSeconds'	integer
     * Timeout for the list/watch call. This limits the duration of the call,
     * regardless of any activity or inactivity.
     * 'watch'	boolean
     * Watch for changes to the described resources and return them as a stream of add,
     * update, and remove notifications. Specify resourceVersion.
     * 'includeUninitialized'	boolean
     * If true, partially initialized resources are included in the response.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return Status|mixed
     */
    public function deleteCollection(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/apiregistration.k8s.io/v1/apiservices",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteApiregistrationV1CollectionAPIService'
        );
    }

    /**
     * read the specified APIService
     *
     * @param string $name name of the APIService
     * @param array $queries options:
     * 'exact'	boolean
     * Should the export be exact.  Exact export maintains cluster-specific fields like
     * 'Namespace'.
     * 'export'	boolean
     * Should this value be exported.  Export strips fields that a user can not
     * specify.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheAPIService|mixed
     */
    public function read(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiregistration.k8s.io/v1/apiservices/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'readApiregistrationV1APIService'
        );
    }

    /**
     * replace the specified APIService
     *
     * @param string $name name of the APIService
     * @param TheAPIService $Model
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheAPIService|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Kube_aggregator\Pkg\Apis\Apiregistration\V1\APIService $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apiregistration.k8s.io/v1/apiservices/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceApiregistrationV1APIService'
        );
    }

    /**
     * delete an APIService
     *
     * @param string $name name of the APIService
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
    public function delete(string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/apiregistration.k8s.io/v1/apiservices/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'deleteApiregistrationV1APIService'
        );
    }

    /**
     * partially update the specified APIService
     *
     * @param string $name name of the APIService
     * @param Patch $Model
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheAPIService|mixed
     */
    public function patch(string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apiregistration.k8s.io/v1/apiservices/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'patchApiregistrationV1APIService'
        );
    }

    /**
     * read status of the specified APIService
     *
     * @param string $name name of the APIService
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheAPIService|mixed
     */
    public function readStatus(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiregistration.k8s.io/v1/apiservices/{$name}/status",
        		[
        			'query' => $queries,
        		]
        	),
        	'readApiregistrationV1APIServiceStatus'
        );
    }

    /**
     * replace status of the specified APIService
     *
     * @param string $name name of the APIService
     * @param TheAPIService $Model
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheAPIService|mixed
     */
    public function replaceStatus(string $name, \Kubernetes\Model\Io\K8s\Kube_aggregator\Pkg\Apis\Apiregistration\V1\APIService $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apiregistration.k8s.io/v1/apiservices/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceApiregistrationV1APIServiceStatus'
        );
    }

    /**
     * partially update status of the specified APIService
     *
     * @param string $name name of the APIService
     * @param Patch $Model
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheAPIService|mixed
     */
    public function patchStatus(string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apiregistration.k8s.io/v1/apiservices/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'patchApiregistrationV1APIServiceStatus'
        );
    }

    /**
     * watch individual changes to a list of APIService. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
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
     * 'fieldSelector'	string
     * A selector to restrict the list of returned objects by their fields. Defaults to
     * everything.
     * 'includeUninitialized'	boolean
     * If true, partially initialized resources are included in the response.
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
     * When specified with a watch call, shows changes that occur after that particular
     * version of a resource. Defaults to changes from the beginning of history. When
     * specified for list: - if unset, then the result is returned from remote storage
     * based on quorum-read flag; - if it's 0, then we simply return what we currently
     * have in cache, no guarantee; - if set to non zero, then the result is at least
     * as fresh as given rv.
     * 'timeoutSeconds'	integer
     * Timeout for the list/watch call. This limits the duration of the call,
     * regardless of any activity or inactivity.
     * 'watch'	boolean
     * Watch for changes to the described resources and return them as a stream of add,
     * update, and remove notifications. Specify resourceVersion.
     *
     * @return WatchEvent|mixed
     */
    public function watchList(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiregistration.k8s.io/v1/watch/apiservices",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchApiregistrationV1APIServiceList'
        );
    }

    /**
     * watch changes to an object of kind APIService. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the APIService
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
     * 'fieldSelector'	string
     * A selector to restrict the list of returned objects by their fields. Defaults to
     * everything.
     * 'includeUninitialized'	boolean
     * If true, partially initialized resources are included in the response.
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
     * When specified with a watch call, shows changes that occur after that particular
     * version of a resource. Defaults to changes from the beginning of history. When
     * specified for list: - if unset, then the result is returned from remote storage
     * based on quorum-read flag; - if it's 0, then we simply return what we currently
     * have in cache, no guarantee; - if set to non zero, then the result is at least
     * as fresh as given rv.
     * 'timeoutSeconds'	integer
     * Timeout for the list/watch call. This limits the duration of the call,
     * regardless of any activity or inactivity.
     * 'watch'	boolean
     * Watch for changes to the described resources and return them as a stream of add,
     * update, and remove notifications. Specify resourceVersion.
     *
     * @return WatchEvent|mixed
     */
    public function watch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiregistration.k8s.io/v1/watch/apiservices/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchApiregistrationV1APIService'
        );
    }

    /**
     * list or watch objects of kind APIService
     *
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
     * When specified with a watch call, shows changes that occur after that particular
     * version of a resource. Defaults to changes from the beginning of history. When
     * specified for list: - if unset, then the result is returned from remote storage
     * based on quorum-read flag; - if it's 0, then we simply return what we currently
     * have in cache, no guarantee; - if set to non zero, then the result is at least
     * as fresh as given rv.
     * 'timeoutSeconds'	integer
     * Timeout for the list/watch call. This limits the duration of the call,
     * regardless of any activity or inactivity.
     * 'watch'	boolean
     * Watch for changes to the described resources and return them as a stream of add,
     * update, and remove notifications. Specify resourceVersion.
     * 'includeUninitialized'	boolean
     * If true, partially initialized resources are included in the response.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return APIServiceListV1beta1|mixed
     */
    public function listApiregistrationV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiregistration.k8s.io/v1beta1/apiservices",
        		[
        			'query' => $queries,
        		]
        	),
        	'listApiregistrationV1beta1APIService'
        );
    }

    /**
     * create an APIService
     *
     * @param TheAPIServiceV1beta1 $Model
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'includeUninitialized'	boolean
     * If true, partially initialized resources are included in the response.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheAPIServiceV1beta1|mixed
     */
    public function createApiregistrationV1beta1(\Kubernetes\Model\Io\K8s\Kube_aggregator\Pkg\Apis\Apiregistration\V1beta1\APIService $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apiregistration.k8s.io/v1beta1/apiservices",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createApiregistrationV1beta1APIService'
        );
    }

    /**
     * delete collection of APIService
     *
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
     * When specified with a watch call, shows changes that occur after that particular
     * version of a resource. Defaults to changes from the beginning of history. When
     * specified for list: - if unset, then the result is returned from remote storage
     * based on quorum-read flag; - if it's 0, then we simply return what we currently
     * have in cache, no guarantee; - if set to non zero, then the result is at least
     * as fresh as given rv.
     * 'timeoutSeconds'	integer
     * Timeout for the list/watch call. This limits the duration of the call,
     * regardless of any activity or inactivity.
     * 'watch'	boolean
     * Watch for changes to the described resources and return them as a stream of add,
     * update, and remove notifications. Specify resourceVersion.
     * 'includeUninitialized'	boolean
     * If true, partially initialized resources are included in the response.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return Status|mixed
     */
    public function deleteCollectionApiregistrationV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/apiregistration.k8s.io/v1beta1/apiservices",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteApiregistrationV1beta1CollectionAPIService'
        );
    }

    /**
     * read the specified APIService
     *
     * @param string $name name of the APIService
     * @param array $queries options:
     * 'exact'	boolean
     * Should the export be exact.  Exact export maintains cluster-specific fields like
     * 'Namespace'.
     * 'export'	boolean
     * Should this value be exported.  Export strips fields that a user can not
     * specify.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheAPIServiceV1beta1|mixed
     */
    public function readApiregistrationV1beta1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiregistration.k8s.io/v1beta1/apiservices/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'readApiregistrationV1beta1APIService'
        );
    }

    /**
     * replace the specified APIService
     *
     * @param string $name name of the APIService
     * @param TheAPIServiceV1beta1 $Model
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheAPIServiceV1beta1|mixed
     */
    public function replaceApiregistrationV1beta1(string $name, \Kubernetes\Model\Io\K8s\Kube_aggregator\Pkg\Apis\Apiregistration\V1beta1\APIService $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apiregistration.k8s.io/v1beta1/apiservices/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceApiregistrationV1beta1APIService'
        );
    }

    /**
     * delete an APIService
     *
     * @param string $name name of the APIService
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
    public function deleteApiregistrationV1beta1(string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/apiregistration.k8s.io/v1beta1/apiservices/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'deleteApiregistrationV1beta1APIService'
        );
    }

    /**
     * partially update the specified APIService
     *
     * @param string $name name of the APIService
     * @param Patch $Model
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheAPIServiceV1beta1|mixed
     */
    public function patchApiregistrationV1beta1(string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apiregistration.k8s.io/v1beta1/apiservices/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'patchApiregistrationV1beta1APIService'
        );
    }

    /**
     * read status of the specified APIService
     *
     * @param string $name name of the APIService
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheAPIServiceV1beta1|mixed
     */
    public function readStatusApiregistrationV1beta1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiregistration.k8s.io/v1beta1/apiservices/{$name}/status",
        		[
        			'query' => $queries,
        		]
        	),
        	'readApiregistrationV1beta1APIServiceStatus'
        );
    }

    /**
     * replace status of the specified APIService
     *
     * @param string $name name of the APIService
     * @param TheAPIServiceV1beta1 $Model
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheAPIServiceV1beta1|mixed
     */
    public function replaceStatusApiregistrationV1beta1(string $name, \Kubernetes\Model\Io\K8s\Kube_aggregator\Pkg\Apis\Apiregistration\V1beta1\APIService $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apiregistration.k8s.io/v1beta1/apiservices/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceApiregistrationV1beta1APIServiceStatus'
        );
    }

    /**
     * partially update status of the specified APIService
     *
     * @param string $name name of the APIService
     * @param Patch $Model
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheAPIServiceV1beta1|mixed
     */
    public function patchStatusApiregistrationV1beta1(string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apiregistration.k8s.io/v1beta1/apiservices/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'patchApiregistrationV1beta1APIServiceStatus'
        );
    }

    /**
     * watch individual changes to a list of APIService. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
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
     * 'fieldSelector'	string
     * A selector to restrict the list of returned objects by their fields. Defaults to
     * everything.
     * 'includeUninitialized'	boolean
     * If true, partially initialized resources are included in the response.
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
     * When specified with a watch call, shows changes that occur after that particular
     * version of a resource. Defaults to changes from the beginning of history. When
     * specified for list: - if unset, then the result is returned from remote storage
     * based on quorum-read flag; - if it's 0, then we simply return what we currently
     * have in cache, no guarantee; - if set to non zero, then the result is at least
     * as fresh as given rv.
     * 'timeoutSeconds'	integer
     * Timeout for the list/watch call. This limits the duration of the call,
     * regardless of any activity or inactivity.
     * 'watch'	boolean
     * Watch for changes to the described resources and return them as a stream of add,
     * update, and remove notifications. Specify resourceVersion.
     *
     * @return WatchEvent|mixed
     */
    public function watchListApiregistrationV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiregistration.k8s.io/v1beta1/watch/apiservices",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchApiregistrationV1beta1APIServiceList'
        );
    }

    /**
     * watch changes to an object of kind APIService. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the APIService
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
     * 'fieldSelector'	string
     * A selector to restrict the list of returned objects by their fields. Defaults to
     * everything.
     * 'includeUninitialized'	boolean
     * If true, partially initialized resources are included in the response.
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
     * When specified with a watch call, shows changes that occur after that particular
     * version of a resource. Defaults to changes from the beginning of history. When
     * specified for list: - if unset, then the result is returned from remote storage
     * based on quorum-read flag; - if it's 0, then we simply return what we currently
     * have in cache, no guarantee; - if set to non zero, then the result is at least
     * as fresh as given rv.
     * 'timeoutSeconds'	integer
     * Timeout for the list/watch call. This limits the duration of the call,
     * regardless of any activity or inactivity.
     * 'watch'	boolean
     * Watch for changes to the described resources and return them as a stream of add,
     * update, and remove notifications. Specify resourceVersion.
     *
     * @return WatchEvent|mixed
     */
    public function watchApiregistrationV1beta1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiregistration.k8s.io/v1beta1/watch/apiservices/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchApiregistrationV1beta1APIService'
        );
    }


}


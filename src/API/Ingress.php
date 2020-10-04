<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\IngressList as IngressList;
use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\Ingress as TheIngress;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class Ingress extends AbstractAPI
{

    /**
     * list or watch objects of kind Ingress
     *
     * @param array $queries options:
     * 'continue'	string
     * The continue option should be set when retrieving more results from the server.
     * Since this value is server defined, clients may only use the continue value from
     * a previous query result with identical query parameters (except for the value of
     * continue) and the server may reject a continue value it does not recognize. If
     * the specified continue value is no longer valid whether due to expiration
     * (generally five to fifteen minutes) or a configuration change on the server the
     * server will respond with a 410 ResourceExpired error indicating the client must
     * restart their list without the continue field. This field is not supported when
     * watch is true. Clients may start a watch from the last resourceVersion value
     * returned by the server and not miss any modifications.
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
     * @return IngressList|mixed
     */
    public function listForAllNamespaces(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/ingresses",
        		[
        			'query' => $queries,
        		]
        	),
        	'listExtensionsV1beta1IngressForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Ingress
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param array $queries options:
     * 'continue'	string
     * The continue option should be set when retrieving more results from the server.
     * Since this value is server defined, clients may only use the continue value from
     * a previous query result with identical query parameters (except for the value of
     * continue) and the server may reject a continue value it does not recognize. If
     * the specified continue value is no longer valid whether due to expiration
     * (generally five to fifteen minutes) or a configuration change on the server the
     * server will respond with a 410 ResourceExpired error indicating the client must
     * restart their list without the continue field. This field is not supported when
     * watch is true. Clients may start a watch from the last resourceVersion value
     * returned by the server and not miss any modifications.
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
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return IngressList|mixed
     */
    public function list(string $namespace, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/ingresses",
        		[
        			'query' => $queries,
        		]
        	),
        	'listExtensionsV1beta1NamespacedIngress'
        );
    }

    /**
     * create an Ingress
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param TheIngress $Model
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheIngress|mixed
     */
    public function create(string $namespace, \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\Ingress $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/ingresses",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createExtensionsV1beta1NamespacedIngress'
        );
    }

    /**
     * delete collection of Ingress
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param array $queries options:
     * 'continue'	string
     * The continue option should be set when retrieving more results from the server.
     * Since this value is server defined, clients may only use the continue value from
     * a previous query result with identical query parameters (except for the value of
     * continue) and the server may reject a continue value it does not recognize. If
     * the specified continue value is no longer valid whether due to expiration
     * (generally five to fifteen minutes) or a configuration change on the server the
     * server will respond with a 410 ResourceExpired error indicating the client must
     * restart their list without the continue field. This field is not supported when
     * watch is true. Clients may start a watch from the last resourceVersion value
     * returned by the server and not miss any modifications.
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
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return Status|mixed
     */
    public function deleteCollection(string $namespace, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/ingresses",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteExtensionsV1beta1CollectionNamespacedIngress'
        );
    }

    /**
     * read the specified Ingress
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Ingress
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
     * @return TheIngress|mixed
     */
    public function read(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/ingresses/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'readExtensionsV1beta1NamespacedIngress'
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
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheIngress|mixed
     */
    public function replace(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\Ingress $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/ingresses/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceExtensionsV1beta1NamespacedIngress'
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
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/ingresses/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'deleteExtensionsV1beta1NamespacedIngress'
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
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheIngress|mixed
     */
    public function patch(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/ingresses/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'patchExtensionsV1beta1NamespacedIngress'
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
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/ingresses/{$name}/status",
        		[
        			'query' => $queries,
        		]
        	),
        	'readExtensionsV1beta1NamespacedIngressStatus'
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
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheIngress|mixed
     */
    public function replaceStatus(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\Ingress $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/ingresses/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceExtensionsV1beta1NamespacedIngressStatus'
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
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheIngress|mixed
     */
    public function patchStatus(string $namespace, string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/ingresses/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'patchExtensionsV1beta1NamespacedIngressStatus'
        );
    }

    /**
     * watch individual changes to a list of Ingress
     *
     * @param array $queries options:
     * 'continue'	string
     * The continue option should be set when retrieving more results from the server.
     * Since this value is server defined, clients may only use the continue value from
     * a previous query result with identical query parameters (except for the value of
     * continue) and the server may reject a continue value it does not recognize. If
     * the specified continue value is no longer valid whether due to expiration
     * (generally five to fifteen minutes) or a configuration change on the server the
     * server will respond with a 410 ResourceExpired error indicating the client must
     * restart their list without the continue field. This field is not supported when
     * watch is true. Clients may start a watch from the last resourceVersion value
     * returned by the server and not miss any modifications.
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
    public function watchListForAllNamespaces(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/ingresses",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchExtensionsV1beta1IngressListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Ingress
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param array $queries options:
     * 'continue'	string
     * The continue option should be set when retrieving more results from the server.
     * Since this value is server defined, clients may only use the continue value from
     * a previous query result with identical query parameters (except for the value of
     * continue) and the server may reject a continue value it does not recognize. If
     * the specified continue value is no longer valid whether due to expiration
     * (generally five to fifteen minutes) or a configuration change on the server the
     * server will respond with a 410 ResourceExpired error indicating the client must
     * restart their list without the continue field. This field is not supported when
     * watch is true. Clients may start a watch from the last resourceVersion value
     * returned by the server and not miss any modifications.
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
    public function watchList(string $namespace, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/namespaces/{$namespace}/ingresses",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchExtensionsV1beta1NamespacedIngressList'
        );
    }

    /**
     * watch changes to an object of kind Ingress
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Ingress
     * @param array $queries options:
     * 'continue'	string
     * The continue option should be set when retrieving more results from the server.
     * Since this value is server defined, clients may only use the continue value from
     * a previous query result with identical query parameters (except for the value of
     * continue) and the server may reject a continue value it does not recognize. If
     * the specified continue value is no longer valid whether due to expiration
     * (generally five to fifteen minutes) or a configuration change on the server the
     * server will respond with a 410 ResourceExpired error indicating the client must
     * restart their list without the continue field. This field is not supported when
     * watch is true. Clients may start a watch from the last resourceVersion value
     * returned by the server and not miss any modifications.
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
    public function watch(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/namespaces/{$namespace}/ingresses/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchExtensionsV1beta1NamespacedIngress'
        );
    }


}


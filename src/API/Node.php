<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\NodeList as NodeList;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\Node as TheNode;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class Node extends AbstractAPI
{

    /**
     * list or watch objects of kind Node
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
     * @return NodeList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/nodes",
        		[
        			'query' => $queries,
        		]
        	),
        	'listCoreV1Node'
        );
    }

    /**
     * create a Node
     *
     * @param TheNode $Model
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheNode|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Core\V1\Node $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/nodes",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createCoreV1Node'
        );
    }

    /**
     * delete collection of Node
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
    public function deleteCollection(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/nodes",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteCoreV1CollectionNode'
        );
    }

    /**
     * read the specified Node
     *
     * @param string $name name of the Node
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
     * @return TheNode|mixed
     */
    public function read(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/nodes/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'readCoreV1Node'
        );
    }

    /**
     * replace the specified Node
     *
     * @param string $name name of the Node
     * @param TheNode $Model
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheNode|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Core\V1\Node $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/nodes/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceCoreV1Node'
        );
    }

    /**
     * delete a Node
     *
     * @param string $name name of the Node
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
    public function delete(string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/nodes/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'deleteCoreV1Node'
        );
    }

    /**
     * partially update the specified Node
     *
     * @param string $name name of the Node
     * @param Patch $Model
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheNode|mixed
     */
    public function patch(string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/nodes/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'patchCoreV1Node'
        );
    }

    /**
     * connect GET requests to proxy of Node
     *
     * @param string $name name of the Node
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectGetProxy(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1GetNodeProxy'
        );
    }

    /**
     * connect PUT requests to proxy of Node
     *
     * @param string $name name of the Node
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectPutProxy(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PutNodeProxy'
        );
    }

    /**
     * connect POST requests to proxy of Node
     *
     * @param string $name name of the Node
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectPostProxy(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PostNodeProxy'
        );
    }

    /**
     * connect DELETE requests to proxy of Node
     *
     * @param string $name name of the Node
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectDeleteProxy(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1DeleteNodeProxy'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Node
     *
     * @param string $name name of the Node
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectOptionsProxy(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1OptionsNodeProxy'
        );
    }

    /**
     * connect HEAD requests to proxy of Node
     *
     * @param string $name name of the Node
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectHeadProxy(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1HeadNodeProxy'
        );
    }

    /**
     * connect PATCH requests to proxy of Node
     *
     * @param string $name name of the Node
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectPatchProxy(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PatchNodeProxy'
        );
    }

    /**
     * connect GET requests to proxy of Node
     *
     * @param string $name name of the Node
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectGetProxyWithPath(string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/nodes/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1GetNodeProxyWithPath'
        );
    }

    /**
     * connect PUT requests to proxy of Node
     *
     * @param string $name name of the Node
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectPutProxyWithPath(string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/nodes/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PutNodeProxyWithPath'
        );
    }

    /**
     * connect POST requests to proxy of Node
     *
     * @param string $name name of the Node
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectPostProxyWithPath(string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/nodes/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PostNodeProxyWithPath'
        );
    }

    /**
     * connect DELETE requests to proxy of Node
     *
     * @param string $name name of the Node
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectDeleteProxyWithPath(string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/nodes/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1DeleteNodeProxyWithPath'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Node
     *
     * @param string $name name of the Node
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectOptionsProxyWithPath(string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/nodes/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1OptionsNodeProxyWithPath'
        );
    }

    /**
     * connect HEAD requests to proxy of Node
     *
     * @param string $name name of the Node
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectHeadProxyWithPath(string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/nodes/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1HeadNodeProxyWithPath'
        );
    }

    /**
     * connect PATCH requests to proxy of Node
     *
     * @param string $name name of the Node
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectPatchProxyWithPath(string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/nodes/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PatchNodeProxyWithPath'
        );
    }

    /**
     * read status of the specified Node
     *
     * @param string $name name of the Node
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheNode|mixed
     */
    public function readStatus(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/nodes/{$name}/status",
        		[
        			'query' => $queries,
        		]
        	),
        	'readCoreV1NodeStatus'
        );
    }

    /**
     * replace status of the specified Node
     *
     * @param string $name name of the Node
     * @param TheNode $Model
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheNode|mixed
     */
    public function replaceStatus(string $name, \Kubernetes\Model\Io\K8s\Api\Core\V1\Node $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/nodes/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceCoreV1NodeStatus'
        );
    }

    /**
     * partially update status of the specified Node
     *
     * @param string $name name of the Node
     * @param Patch $Model
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheNode|mixed
     */
    public function patchStatus(string $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/nodes/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'patchCoreV1NodeStatus'
        );
    }

    /**
     * watch individual changes to a list of Node
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
    public function watchList(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/nodes",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchCoreV1NodeList'
        );
    }

    /**
     * watch changes to an object of kind Node
     *
     * @param string $name name of the Node
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
    public function watch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/nodes/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchCoreV1Node'
        );
    }


}


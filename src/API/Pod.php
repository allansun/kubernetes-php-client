<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\PodList as PodList;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\Pod as ThePod;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
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
        		"/api/v1/namespaces/{$namespace}/pods",
        		[
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
     * 'exact'	boolean
     * Should the export be exact.  Exact export maintains cluster-specific fields like
     * 'Namespace'.
     * 'export'	boolean
     * Should this value be exported.  Export strips fields that a user can not
     * specify.
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
     * connect GET requests to attach of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param array $queries options:
     * 'container'	string
     * The container in which to execute the command. Defaults to only container if
     * there is only one container in the pod.
     * 'stderr'	boolean
     * Stderr if true indicates that stderr is to be redirected for the attach call.
     * Defaults to true.
     * 'stdin'	boolean
     * Stdin if true, redirects the standard input stream of the pod for this call.
     * Defaults to false.
     * 'stdout'	boolean
     * Stdout if true indicates that stdout is to be redirected for the attach call.
     * Defaults to true.
     * 'tty'	boolean
     * TTY if true indicates that a tty will be allocated for the attach call. This is
     * passed through the container runtime so the tty is allocated on the worker node
     * by the container runtime. Defaults to false.
     *
     * @return string|mixed
     */
    public function connectGetAttach(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/attach",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1GetNamespacedPodAttach'
        );
    }

    /**
     * connect POST requests to attach of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param array $queries options:
     * 'container'	string
     * The container in which to execute the command. Defaults to only container if
     * there is only one container in the pod.
     * 'stderr'	boolean
     * Stderr if true indicates that stderr is to be redirected for the attach call.
     * Defaults to true.
     * 'stdin'	boolean
     * Stdin if true, redirects the standard input stream of the pod for this call.
     * Defaults to false.
     * 'stdout'	boolean
     * Stdout if true indicates that stdout is to be redirected for the attach call.
     * Defaults to true.
     * 'tty'	boolean
     * TTY if true indicates that a tty will be allocated for the attach call. This is
     * passed through the container runtime so the tty is allocated on the worker node
     * by the container runtime. Defaults to false.
     *
     * @return string|mixed
     */
    public function connectPostAttach(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/attach",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PostNamespacedPodAttach'
        );
    }

    /**
     * connect GET requests to exec of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param array $queries options:
     * 'command'	string
     * Command is the remote command to execute. argv array. Not executed within a
     * shell.
     * 'container'	string
     * Container in which to execute the command. Defaults to only container if there
     * is only one container in the pod.
     * 'stderr'	boolean
     * Redirect the standard error stream of the pod for this call. Defaults to true.
     * 'stdin'	boolean
     * Redirect the standard input stream of the pod for this call. Defaults to false.
     * 'stdout'	boolean
     * Redirect the standard output stream of the pod for this call. Defaults to true.
     * 'tty'	boolean
     * TTY if true indicates that a tty will be allocated for the exec call. Defaults
     * to false.
     *
     * @return string|mixed
     */
    public function connectGetExec(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/exec",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1GetNamespacedPodExec'
        );
    }

    /**
     * connect POST requests to exec of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param array $queries options:
     * 'command'	string
     * Command is the remote command to execute. argv array. Not executed within a
     * shell.
     * 'container'	string
     * Container in which to execute the command. Defaults to only container if there
     * is only one container in the pod.
     * 'stderr'	boolean
     * Redirect the standard error stream of the pod for this call. Defaults to true.
     * 'stdin'	boolean
     * Redirect the standard input stream of the pod for this call. Defaults to false.
     * 'stdout'	boolean
     * Redirect the standard output stream of the pod for this call. Defaults to true.
     * 'tty'	boolean
     * TTY if true indicates that a tty will be allocated for the exec call. Defaults
     * to false.
     *
     * @return string|mixed
     */
    public function connectPostExec(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/exec",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PostNamespacedPodExec'
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
     * connect GET requests to portforward of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param array $queries options:
     * 'ports'	integer
     * List of ports to forward Required when using WebSockets
     *
     * @return string|mixed
     */
    public function connectGetPortforward(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/portforward",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1GetNamespacedPodPortforward'
        );
    }

    /**
     * connect POST requests to portforward of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param array $queries options:
     * 'ports'	integer
     * List of ports to forward Required when using WebSockets
     *
     * @return string|mixed
     */
    public function connectPostPortforward(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/portforward",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PostNamespacedPodPortforward'
        );
    }

    /**
     * connect GET requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectGetProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1GetNamespacedPodProxy'
        );
    }

    /**
     * connect PUT requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectPutProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PutNamespacedPodProxy'
        );
    }

    /**
     * connect POST requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectPostProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PostNamespacedPodProxy'
        );
    }

    /**
     * connect DELETE requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectDeleteProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1DeleteNamespacedPodProxy'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectOptionsProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1OptionsNamespacedPodProxy'
        );
    }

    /**
     * connect HEAD requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectHeadProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1HeadNamespacedPodProxy'
        );
    }

    /**
     * connect PATCH requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectPatchProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PatchNamespacedPodProxy'
        );
    }

    /**
     * connect GET requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectGetProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1GetNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect PUT requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectPutProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PutNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect POST requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectPostProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PostNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect DELETE requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectDeleteProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1DeleteNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectOptionsProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1OptionsNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect HEAD requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectHeadProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1HeadNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect PATCH requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectPatchProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PatchNamespacedPodProxyWithPath'
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
     * watch individual changes to a list of Pod
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
        		"/api/v1/watch/namespaces/{$namespace}/pods",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchCoreV1NamespacedPodList'
        );
    }

    /**
     * watch changes to an object of kind Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the Pod
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
        		"/api/v1/watch/namespaces/{$namespace}/pods/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchCoreV1NamespacedPod'
        );
    }

    /**
     * watch individual changes to a list of Pod
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
        		"/api/v1/watch/pods",
        		[
        			'query' => $queries,
        		]
        	),
        	'watchCoreV1PodListForAllNamespaces'
        );
    }


}


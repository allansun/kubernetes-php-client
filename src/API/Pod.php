<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Core\V1\PodList as PodList;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\Pod as ThePod;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class Pod extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind Pod
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param $namespace
     * @param array $queries
     * @return PodList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listCoreV1NamespacedPod'
        );
    }

    /**
     * create a Pod
     *
     * @param $namespace
     * @param ThePod $Model
     * @return ThePod|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Core\V1\Pod $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createCoreV1NamespacedPod'
        );
    }

    /**
     * delete collection of Pod
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/pods"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1CollectionNamespacedPod'
        );
    }

    /**
     * read the specified Pod
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return ThePod|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readCoreV1NamespacedPod'
        );
    }

    /**
     * replace the specified Pod
     *
     * @param $namespace
     * @param $name
     * @param ThePod $Model
     * @return ThePod|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Core\V1\Pod $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1NamespacedPod'
        );
    }

    /**
     * delete a Pod
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $namespace
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function delete($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1NamespacedPod'
        );
    }

    /**
     * partially update the specified Pod
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return ThePod|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchCoreV1NamespacedPod'
        );
    }

    /**
     * connect GET requests to attach of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectGetAttach($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/attach"
        		,[
        		]
        	)
        	, 'connectCoreV1GetNamespacedPodAttach'
        );
    }

    /**
     * connect POST requests to attach of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPostAttach($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/attach"
        		,[
        		]
        	)
        	, 'connectCoreV1PostNamespacedPodAttach'
        );
    }

    /**
     * connect GET requests to exec of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectGetExec($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/exec"
        		,[
        		]
        	)
        	, 'connectCoreV1GetNamespacedPodExec'
        );
    }

    /**
     * connect POST requests to exec of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPostExec($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/exec"
        		,[
        		]
        	)
        	, 'connectCoreV1PostNamespacedPodExec'
        );
    }

    /**
     * read log of the specified Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function readLog($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/log"
        		,[
        		]
        	)
        	, 'readCoreV1NamespacedPodLog'
        );
    }

    /**
     * connect GET requests to portforward of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectGetPortforward($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/portforward"
        		,[
        		]
        	)
        	, 'connectCoreV1GetNamespacedPodPortforward'
        );
    }

    /**
     * connect POST requests to portforward of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPostPortforward($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/portforward"
        		,[
        		]
        	)
        	, 'connectCoreV1PostNamespacedPodPortforward'
        );
    }

    /**
     * connect GET requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectGetProxy($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1GetNamespacedPodProxy'
        );
    }

    /**
     * connect PUT requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPutProxy($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1PutNamespacedPodProxy'
        );
    }

    /**
     * connect POST requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPostProxy($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1PostNamespacedPodProxy'
        );
    }

    /**
     * connect DELETE requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectDeleteProxy($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1DeleteNamespacedPodProxy'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectOptionsProxy($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1OptionsNamespacedPodProxy'
        );
    }

    /**
     * connect HEAD requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectHeadProxy($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1HeadNamespacedPodProxy'
        );
    }

    /**
     * connect PATCH requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPatchProxy($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1PatchNamespacedPodProxy'
        );
    }

    /**
     * connect GET requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectGetProxyWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1GetNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect PUT requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectPutProxyWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1PutNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect POST requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectPostProxyWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1PostNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect DELETE requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectDeleteProxyWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1DeleteNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectOptionsProxyWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1OptionsNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect HEAD requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectHeadProxyWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1HeadNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect PATCH requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectPatchProxyWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1PatchNamespacedPodProxyWithPath'
        );
    }

    /**
     * read status of the specified Pod
     *
     * @param $namespace
     * @param $name
     * @return ThePod|mixed
     */
    public function readStatus($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/status"
        		,[
        		]
        	)
        	, 'readCoreV1NamespacedPodStatus'
        );
    }

    /**
     * replace status of the specified Pod
     *
     * @param $namespace
     * @param $name
     * @param ThePod $Model
     * @return ThePod|mixed
     */
    public function replaceStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Core\V1\Pod $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1NamespacedPodStatus'
        );
    }

    /**
     * partially update status of the specified Pod
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return ThePod|mixed
     */
    public function patchStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchCoreV1NamespacedPodStatus'
        );
    }

    /**
     * list or watch objects of kind Pod
     *
     * @return PodList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/pods"
        		,[
        		]
        	)
        	, 'listCoreV1PodForAllNamespaces'
        );
    }

    /**
     * proxy GET requests to Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function proxyGET($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/proxy/namespaces/{$namespace}/pods/{$name}"
        		,[
        		]
        	)
        	, 'proxyCoreV1GETNamespacedPod'
        );
    }

    /**
     * proxy PUT requests to Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function proxyPUT($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/proxy/namespaces/{$namespace}/pods/{$name}"
        		,[
        		]
        	)
        	, 'proxyCoreV1PUTNamespacedPod'
        );
    }

    /**
     * proxy POST requests to Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function proxyPOST($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/proxy/namespaces/{$namespace}/pods/{$name}"
        		,[
        		]
        	)
        	, 'proxyCoreV1POSTNamespacedPod'
        );
    }

    /**
     * proxy DELETE requests to Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function proxyDELETE($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/proxy/namespaces/{$namespace}/pods/{$name}"
        		,[
        		]
        	)
        	, 'proxyCoreV1DELETENamespacedPod'
        );
    }

    /**
     * proxy OPTIONS requests to Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function proxyOPTIONS($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/proxy/namespaces/{$namespace}/pods/{$name}"
        		,[
        		]
        	)
        	, 'proxyCoreV1OPTIONSNamespacedPod'
        );
    }

    /**
     * proxy HEAD requests to Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function proxyHEAD($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/proxy/namespaces/{$namespace}/pods/{$name}"
        		,[
        		]
        	)
        	, 'proxyCoreV1HEADNamespacedPod'
        );
    }

    /**
     * proxy PATCH requests to Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function proxyPATCH($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/proxy/namespaces/{$namespace}/pods/{$name}"
        		,[
        		]
        	)
        	, 'proxyCoreV1PATCHNamespacedPod'
        );
    }

    /**
     * proxy GET requests to Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function proxyGETWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/proxy/namespaces/{$namespace}/pods/{$name}/{$path}"
        		,[
        		]
        	)
        	, 'proxyCoreV1GETNamespacedPodWithPath'
        );
    }

    /**
     * proxy PUT requests to Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function proxyPUTWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/proxy/namespaces/{$namespace}/pods/{$name}/{$path}"
        		,[
        		]
        	)
        	, 'proxyCoreV1PUTNamespacedPodWithPath'
        );
    }

    /**
     * proxy POST requests to Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function proxyPOSTWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/proxy/namespaces/{$namespace}/pods/{$name}/{$path}"
        		,[
        		]
        	)
        	, 'proxyCoreV1POSTNamespacedPodWithPath'
        );
    }

    /**
     * proxy DELETE requests to Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function proxyDELETEWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/proxy/namespaces/{$namespace}/pods/{$name}/{$path}"
        		,[
        		]
        	)
        	, 'proxyCoreV1DELETENamespacedPodWithPath'
        );
    }

    /**
     * proxy OPTIONS requests to Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function proxyOPTIONSWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/proxy/namespaces/{$namespace}/pods/{$name}/{$path}"
        		,[
        		]
        	)
        	, 'proxyCoreV1OPTIONSNamespacedPodWithPath'
        );
    }

    /**
     * proxy HEAD requests to Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function proxyHEADWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/proxy/namespaces/{$namespace}/pods/{$name}/{$path}"
        		,[
        		]
        	)
        	, 'proxyCoreV1HEADNamespacedPodWithPath'
        );
    }

    /**
     * proxy PATCH requests to Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function proxyPATCHWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/proxy/namespaces/{$namespace}/pods/{$name}/{$path}"
        		,[
        		]
        	)
        	, 'proxyCoreV1PATCHNamespacedPodWithPath'
        );
    }

    /**
     * watch individual changes to a list of Pod
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/pods"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedPodList'
        );
    }

    /**
     * watch changes to an object of kind Pod
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/pods/{$name}"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedPod'
        );
    }

    /**
     * watch individual changes to a list of Pod
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/pods"
        		,[
        		]
        	)
        	, 'watchCoreV1PodListForAllNamespaces'
        );
    }


}


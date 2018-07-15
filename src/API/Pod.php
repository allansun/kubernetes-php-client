<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\Pod as Pod;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\PodList as PodList;
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
     * @param string $namespace
     * @param array $queries
     * @return PodList|mixed
     */
    public function list(string $namespace = 'default', array $queries)
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
     * @param string $namespace
     * @param Pod $Model
     * @return Pod|mixed
     */
    public function create(string $namespace = 'default', \Pod $Model)
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
     * @param string $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection(string $namespace = 'default', array $queries)
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
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return Pod|mixed
     */
    public function read(string $namespace = 'default', $name, array $queries)
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
     * @param string $namespace
     * @param $name
     * @param Pod $Model
     * @return Pod|mixed
     */
    public function replace(string $namespace = 'default', $name, \Pod $Model)
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
     * @param string $namespace
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function delete(string $namespace = 'default', $name, \DeleteOptions $Model, array $queries)
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
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Pod|mixed
     */
    public function patch(string $namespace = 'default', $name, \Patch $Model)
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
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectGetAttach(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPostAttach(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectGetExec(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPostExec(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function readLog(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectGetPortforward(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPostPortforward(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectGetProxy(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPutProxy(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPostProxy(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectDeleteProxy(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectOptionsProxy(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectHeadProxy(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPatchProxy(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectGetProxyWithPath(string $namespace = 'default', $name, $path)
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
     * @param string $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectPutProxyWithPath(string $namespace = 'default', $name, $path)
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
     * @param string $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectPostProxyWithPath(string $namespace = 'default', $name, $path)
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
     * @param string $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectDeleteProxyWithPath(string $namespace = 'default', $name, $path)
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
     * @param string $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectOptionsProxyWithPath(string $namespace = 'default', $name, $path)
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
     * @param string $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectHeadProxyWithPath(string $namespace = 'default', $name, $path)
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
     * @param string $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectPatchProxyWithPath(string $namespace = 'default', $name, $path)
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
     * @param string $namespace
     * @param $name
     * @return Pod|mixed
     */
    public function readStatus(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @param Pod $Model
     * @return Pod|mixed
     */
    public function replaceStatus(string $namespace = 'default', $name, \Pod $Model)
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
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Pod|mixed
     */
    public function patchStatus(string $namespace = 'default', $name, \Patch $Model)
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
     * watch individual changes to a list of Pod
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchList(string $namespace = 'default')
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
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch(string $namespace = 'default', $name)
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


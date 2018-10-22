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
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey dryRun	string
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
     * watch individual changes to a list of Pod. deprecated: use the 'watch' parameter
     * with a list operation instead.
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
     * watch changes to an object of kind Pod. deprecated: use the 'watch' parameter
     * with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
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
     * watch individual changes to a list of Pod. deprecated: use the 'watch' parameter
     * with a list operation instead.
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


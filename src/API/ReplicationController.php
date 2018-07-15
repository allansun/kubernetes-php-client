<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\ReplicationController as ReplicationController;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\ReplicationControllerList as ReplicationControllerList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class ReplicationController extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind ReplicationController
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
     * @return ReplicationControllerList|mixed
     */
    public function list(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/replicationcontrollers"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listCoreV1NamespacedReplicationController'
        );
    }

    /**
     * create a ReplicationController
     *
     * @param string $namespace
     * @param ReplicationController $Model
     * @return ReplicationController|mixed
     */
    public function create(string $namespace = 'default', \ReplicationController $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/replicationcontrollers"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createCoreV1NamespacedReplicationController'
        );
    }

    /**
     * delete collection of ReplicationController
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
        		"/api/v1/namespaces/{$namespace}/replicationcontrollers"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1CollectionNamespacedReplicationController'
        );
    }

    /**
     * read the specified ReplicationController
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return ReplicationController|mixed
     */
    public function read(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/replicationcontrollers/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readCoreV1NamespacedReplicationController'
        );
    }

    /**
     * replace the specified ReplicationController
     *
     * @param string $namespace
     * @param $name
     * @param ReplicationController $Model
     * @return ReplicationController|mixed
     */
    public function replace(string $namespace = 'default', $name, \ReplicationController $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/replicationcontrollers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1NamespacedReplicationController'
        );
    }

    /**
     * delete a ReplicationController
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
        		"/api/v1/namespaces/{$namespace}/replicationcontrollers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1NamespacedReplicationController'
        );
    }

    /**
     * partially update the specified ReplicationController
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return ReplicationController|mixed
     */
    public function patch(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/replicationcontrollers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchCoreV1NamespacedReplicationController'
        );
    }

    /**
     * read status of the specified ReplicationController
     *
     * @param string $namespace
     * @param $name
     * @return ReplicationController|mixed
     */
    public function readStatus(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/replicationcontrollers/{$name}/status"
        		,[
        		]
        	)
        	, 'readCoreV1NamespacedReplicationControllerStatus'
        );
    }

    /**
     * replace status of the specified ReplicationController
     *
     * @param string $namespace
     * @param $name
     * @param ReplicationController $Model
     * @return ReplicationController|mixed
     */
    public function replaceStatus(string $namespace = 'default', $name, \ReplicationController $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/replicationcontrollers/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1NamespacedReplicationControllerStatus'
        );
    }

    /**
     * partially update status of the specified ReplicationController
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return ReplicationController|mixed
     */
    public function patchStatus(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/replicationcontrollers/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchCoreV1NamespacedReplicationControllerStatus'
        );
    }

    /**
     * list or watch objects of kind ReplicationController
     *
     * @return ReplicationControllerList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/replicationcontrollers"
        		,[
        		]
        	)
        	, 'listCoreV1ReplicationControllerForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of ReplicationController
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchList(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/replicationcontrollers"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedReplicationControllerList'
        );
    }

    /**
     * watch changes to an object of kind ReplicationController
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/replicationcontrollers/{$name}"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedReplicationController'
        );
    }

    /**
     * watch individual changes to a list of ReplicationController
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/replicationcontrollers"
        		,[
        		]
        	)
        	, 'watchCoreV1ReplicationControllerListForAllNamespaces'
        );
    }


}


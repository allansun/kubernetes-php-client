<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Apps\V1\ReplicaSetList as ReplicaSetList;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1\ReplicaSet as TheReplicaSet;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class ReplicaSet extends \KubernetesRuntime\AbstractAPI
{

    /**
     * list or watch objects of kind ReplicaSet
     *
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param $namespace
     * @param array $queries
     * @return ReplicaSetList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAppsV1NamespacedReplicaSet'
        );
    }

    /**
     * create a ReplicaSet
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param TheReplicaSet $Model
     * @param array $queries
     * @return TheReplicaSet|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Apps\V1\ReplicaSet $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createAppsV1NamespacedReplicaSet'
        );
    }

    /**
     * delete collection of ReplicaSet
     *
     * @configkey continue	string
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey continue	string
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @param $namespace
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection($namespace = 'default', \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1CollectionNamespacedReplicaSet'
        );
    }

    /**
     * read the specified ReplicaSet
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheReplicaSet|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAppsV1NamespacedReplicaSet'
        );
    }

    /**
     * replace the specified ReplicaSet
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param $name
     * @param TheReplicaSet $Model
     * @param array $queries
     * @return TheReplicaSet|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1\ReplicaSet $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAppsV1NamespacedReplicaSet'
        );
    }

    /**
     * delete a ReplicaSet
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
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1NamespacedReplicaSet'
        );
    }

    /**
     * partially update the specified ReplicaSet
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheReplicaSet|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAppsV1NamespacedReplicaSet'
        );
    }

    /**
     * read status of the specified ReplicaSet
     *
     * @param $namespace
     * @param $name
     * @return TheReplicaSet|mixed
     */
    public function readStatus($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets/{$name}/status"
        		,[
        		]
        	)
        	, 'readAppsV1NamespacedReplicaSetStatus'
        );
    }

    /**
     * replace status of the specified ReplicaSet
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param $name
     * @param TheReplicaSet $Model
     * @param array $queries
     * @return TheReplicaSet|mixed
     */
    public function replaceStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1\ReplicaSet $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAppsV1NamespacedReplicaSetStatus'
        );
    }

    /**
     * partially update status of the specified ReplicaSet
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheReplicaSet|mixed
     */
    public function patchStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAppsV1NamespacedReplicaSetStatus'
        );
    }

    /**
     * list or watch objects of kind ReplicaSet
     *
     * @return ReplicaSetList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/replicasets"
        		,[
        		]
        	)
        	, 'listAppsV1ReplicaSetForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of ReplicaSet. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/watch/namespaces/{$namespace}/replicasets"
        		,[
        		]
        	)
        	, 'watchAppsV1NamespacedReplicaSetList'
        );
    }

    /**
     * watch changes to an object of kind ReplicaSet. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
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
        		"/apis/apps/v1/watch/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        		]
        	)
        	, 'watchAppsV1NamespacedReplicaSet'
        );
    }

    /**
     * watch individual changes to a list of ReplicaSet. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/watch/replicasets"
        		,[
        		]
        	)
        	, 'watchAppsV1ReplicaSetListForAllNamespaces'
        );
    }


}


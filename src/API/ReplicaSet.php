<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Apps\V1\ReplicaSet as ReplicaSet;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1\ReplicaSetList as ReplicaSetList;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\ReplicaSet as ReplicaSet;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\ReplicaSetList as ReplicaSetList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\ReplicaSet as ReplicaSet;
use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\ReplicaSetList as ReplicaSetList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class ReplicaSet extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind ReplicaSet
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
     * @return ReplicaSetList|mixed
     */
    public function list(string $namespace = 'default', array $queries)
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
     * @param string $namespace
     * @param ReplicaSet $Model
     * @return ReplicaSet|mixed
     */
    public function create(string $namespace = 'default', \ReplicaSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAppsV1NamespacedReplicaSet'
        );
    }

    /**
     * delete collection of ReplicaSet
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
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets"
        		,[
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
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return ReplicaSet|mixed
     */
    public function read(string $namespace = 'default', $name, array $queries)
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
     * @param string $namespace
     * @param $name
     * @param ReplicaSet $Model
     * @return ReplicaSet|mixed
     */
    public function replace(string $namespace = 'default', $name, \ReplicaSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1NamespacedReplicaSet'
        );
    }

    /**
     * delete a ReplicaSet
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
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return ReplicaSet|mixed
     */
    public function patch(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1NamespacedReplicaSet'
        );
    }

    /**
     * read status of the specified ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @return ReplicaSet|mixed
     */
    public function readStatus(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @param ReplicaSet $Model
     * @return ReplicaSet|mixed
     */
    public function replaceStatus(string $namespace = 'default', $name, \ReplicaSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1NamespacedReplicaSetStatus'
        );
    }

    /**
     * partially update status of the specified ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return ReplicaSet|mixed
     */
    public function patchStatus(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
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
     * watch individual changes to a list of ReplicaSet
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchList(string $namespace = 'default')
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
     * watch changes to an object of kind ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch(string $namespace = 'default', $name)
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
     * watch individual changes to a list of ReplicaSet
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

    /**
     * list or watch objects of kind ReplicaSet
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
     * @return ReplicaSetList|mixed
     */
    public function listAppsV1beta2(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/replicasets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAppsV1beta2NamespacedReplicaSet'
        );
    }

    /**
     * create a ReplicaSet
     *
     * @param string $namespace
     * @param ReplicaSet $Model
     * @return ReplicaSet|mixed
     */
    public function createAppsV1beta2(string $namespace = 'default', \ReplicaSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/replicasets"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAppsV1beta2NamespacedReplicaSet'
        );
    }

    /**
     * delete collection of ReplicaSet
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
    public function deleteCollectionAppsV1beta2(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/replicasets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1beta2CollectionNamespacedReplicaSet'
        );
    }

    /**
     * read the specified ReplicaSet
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return ReplicaSet|mixed
     */
    public function readAppsV1beta2(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAppsV1beta2NamespacedReplicaSet'
        );
    }

    /**
     * replace the specified ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @param ReplicaSet $Model
     * @return ReplicaSet|mixed
     */
    public function replaceAppsV1beta2(string $namespace = 'default', $name, \ReplicaSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta2NamespacedReplicaSet'
        );
    }

    /**
     * delete a ReplicaSet
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
    public function deleteAppsV1beta2(string $namespace = 'default', $name, \DeleteOptions $Model, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1beta2NamespacedReplicaSet'
        );
    }

    /**
     * partially update the specified ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return ReplicaSet|mixed
     */
    public function patchAppsV1beta2(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta2NamespacedReplicaSet'
        );
    }

    /**
     * read status of the specified ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @return ReplicaSet|mixed
     */
    public function readStatusAppsV1beta2(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/replicasets/{$name}/status"
        		,[
        		]
        	)
        	, 'readAppsV1beta2NamespacedReplicaSetStatus'
        );
    }

    /**
     * replace status of the specified ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @param ReplicaSet $Model
     * @return ReplicaSet|mixed
     */
    public function replaceStatusAppsV1beta2(string $namespace = 'default', $name, \ReplicaSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/replicasets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta2NamespacedReplicaSetStatus'
        );
    }

    /**
     * partially update status of the specified ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return ReplicaSet|mixed
     */
    public function patchStatusAppsV1beta2(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/replicasets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta2NamespacedReplicaSetStatus'
        );
    }

    /**
     * list or watch objects of kind ReplicaSet
     *
     * @return ReplicaSetList|mixed
     */
    public function listForAllNamespacesAppsV1beta2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/replicasets"
        		,[
        		]
        	)
        	, 'listAppsV1beta2ReplicaSetForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of ReplicaSet
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchListAppsV1beta2(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/watch/namespaces/{$namespace}/replicasets"
        		,[
        		]
        	)
        	, 'watchAppsV1beta2NamespacedReplicaSetList'
        );
    }

    /**
     * watch changes to an object of kind ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchAppsV1beta2(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/watch/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        		]
        	)
        	, 'watchAppsV1beta2NamespacedReplicaSet'
        );
    }

    /**
     * watch individual changes to a list of ReplicaSet
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesAppsV1beta2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/watch/replicasets"
        		,[
        		]
        	)
        	, 'watchAppsV1beta2ReplicaSetListForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind ReplicaSet
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
     * @return ReplicaSetList|mixed
     */
    public function listExtensionsV1beta1(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listExtensionsV1beta1NamespacedReplicaSet'
        );
    }

    /**
     * create a ReplicaSet
     *
     * @param string $namespace
     * @param ReplicaSet $Model
     * @return ReplicaSet|mixed
     */
    public function createExtensionsV1beta1(string $namespace = 'default', \ReplicaSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createExtensionsV1beta1NamespacedReplicaSet'
        );
    }

    /**
     * delete collection of ReplicaSet
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
    public function deleteCollectionExtensionsV1beta1(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteExtensionsV1beta1CollectionNamespacedReplicaSet'
        );
    }

    /**
     * read the specified ReplicaSet
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return ReplicaSet|mixed
     */
    public function readExtensionsV1beta1(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readExtensionsV1beta1NamespacedReplicaSet'
        );
    }

    /**
     * replace the specified ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @param ReplicaSet $Model
     * @return ReplicaSet|mixed
     */
    public function replaceExtensionsV1beta1(string $namespace = 'default', $name, \ReplicaSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceExtensionsV1beta1NamespacedReplicaSet'
        );
    }

    /**
     * delete a ReplicaSet
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
    public function deleteExtensionsV1beta1(string $namespace = 'default', $name, \DeleteOptions $Model, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteExtensionsV1beta1NamespacedReplicaSet'
        );
    }

    /**
     * partially update the specified ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return ReplicaSet|mixed
     */
    public function patchExtensionsV1beta1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchExtensionsV1beta1NamespacedReplicaSet'
        );
    }

    /**
     * read status of the specified ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @return ReplicaSet|mixed
     */
    public function readStatusExtensionsV1beta1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets/{$name}/status"
        		,[
        		]
        	)
        	, 'readExtensionsV1beta1NamespacedReplicaSetStatus'
        );
    }

    /**
     * replace status of the specified ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @param ReplicaSet $Model
     * @return ReplicaSet|mixed
     */
    public function replaceStatusExtensionsV1beta1(string $namespace = 'default', $name, \ReplicaSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceExtensionsV1beta1NamespacedReplicaSetStatus'
        );
    }

    /**
     * partially update status of the specified ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return ReplicaSet|mixed
     */
    public function patchStatusExtensionsV1beta1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchExtensionsV1beta1NamespacedReplicaSetStatus'
        );
    }

    /**
     * list or watch objects of kind ReplicaSet
     *
     * @return ReplicaSetList|mixed
     */
    public function listForAllNamespacesExtensionsV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/replicasets"
        		,[
        		]
        	)
        	, 'listExtensionsV1beta1ReplicaSetForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of ReplicaSet
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchListExtensionsV1beta1(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/namespaces/{$namespace}/replicasets"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1NamespacedReplicaSetList'
        );
    }

    /**
     * watch changes to an object of kind ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchExtensionsV1beta1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1NamespacedReplicaSet'
        );
    }

    /**
     * watch individual changes to a list of ReplicaSet
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesExtensionsV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/replicasets"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1ReplicaSetListForAllNamespaces'
        );
    }


}


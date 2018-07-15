<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Apps\V1\StatefulSet as StatefulSet;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1\StatefulSetList as StatefulSetList;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\StatefulSet as StatefulSet;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\StatefulSetList as StatefulSetList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\StatefulSet as StatefulSet;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\StatefulSetList as StatefulSetList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class StatefulSet extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind StatefulSet
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
     * @return StatefulSetList|mixed
     */
    public function list(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAppsV1NamespacedStatefulSet'
        );
    }

    /**
     * create a StatefulSet
     *
     * @param string $namespace
     * @param StatefulSet $Model
     * @return StatefulSet|mixed
     */
    public function create(string $namespace = 'default', \StatefulSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAppsV1NamespacedStatefulSet'
        );
    }

    /**
     * delete collection of StatefulSet
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
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1CollectionNamespacedStatefulSet'
        );
    }

    /**
     * read the specified StatefulSet
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return StatefulSet|mixed
     */
    public function read(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAppsV1NamespacedStatefulSet'
        );
    }

    /**
     * replace the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @param StatefulSet $Model
     * @return StatefulSet|mixed
     */
    public function replace(string $namespace = 'default', $name, \StatefulSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1NamespacedStatefulSet'
        );
    }

    /**
     * delete a StatefulSet
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
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1NamespacedStatefulSet'
        );
    }

    /**
     * partially update the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return StatefulSet|mixed
     */
    public function patch(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1NamespacedStatefulSet'
        );
    }

    /**
     * read status of the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @return StatefulSet|mixed
     */
    public function readStatus(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets/{$name}/status"
        		,[
        		]
        	)
        	, 'readAppsV1NamespacedStatefulSetStatus'
        );
    }

    /**
     * replace status of the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @param StatefulSet $Model
     * @return StatefulSet|mixed
     */
    public function replaceStatus(string $namespace = 'default', $name, \StatefulSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1NamespacedStatefulSetStatus'
        );
    }

    /**
     * partially update status of the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return StatefulSet|mixed
     */
    public function patchStatus(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1NamespacedStatefulSetStatus'
        );
    }

    /**
     * list or watch objects of kind StatefulSet
     *
     * @return StatefulSetList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/statefulsets"
        		,[
        		]
        	)
        	, 'listAppsV1StatefulSetForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of StatefulSet
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchList(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/watch/namespaces/{$namespace}/statefulsets"
        		,[
        		]
        	)
        	, 'watchAppsV1NamespacedStatefulSetList'
        );
    }

    /**
     * watch changes to an object of kind StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/watch/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        		]
        	)
        	, 'watchAppsV1NamespacedStatefulSet'
        );
    }

    /**
     * watch individual changes to a list of StatefulSet
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/watch/statefulsets"
        		,[
        		]
        	)
        	, 'watchAppsV1StatefulSetListForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind StatefulSet
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
     * @return StatefulSetList|mixed
     */
    public function listAppsV1beta1(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAppsV1beta1NamespacedStatefulSet'
        );
    }

    /**
     * create a StatefulSet
     *
     * @param string $namespace
     * @param StatefulSet $Model
     * @return StatefulSet|mixed
     */
    public function createAppsV1beta1(string $namespace = 'default', \StatefulSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAppsV1beta1NamespacedStatefulSet'
        );
    }

    /**
     * delete collection of StatefulSet
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
    public function deleteCollectionAppsV1beta1(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1beta1CollectionNamespacedStatefulSet'
        );
    }

    /**
     * read the specified StatefulSet
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return StatefulSet|mixed
     */
    public function readAppsV1beta1(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAppsV1beta1NamespacedStatefulSet'
        );
    }

    /**
     * replace the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @param StatefulSet $Model
     * @return StatefulSet|mixed
     */
    public function replaceAppsV1beta1(string $namespace = 'default', $name, \StatefulSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta1NamespacedStatefulSet'
        );
    }

    /**
     * delete a StatefulSet
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
    public function deleteAppsV1beta1(string $namespace = 'default', $name, \DeleteOptions $Model, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1beta1NamespacedStatefulSet'
        );
    }

    /**
     * partially update the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return StatefulSet|mixed
     */
    public function patchAppsV1beta1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta1NamespacedStatefulSet'
        );
    }

    /**
     * read status of the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @return StatefulSet|mixed
     */
    public function readStatusAppsV1beta1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}/status"
        		,[
        		]
        	)
        	, 'readAppsV1beta1NamespacedStatefulSetStatus'
        );
    }

    /**
     * replace status of the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @param StatefulSet $Model
     * @return StatefulSet|mixed
     */
    public function replaceStatusAppsV1beta1(string $namespace = 'default', $name, \StatefulSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta1NamespacedStatefulSetStatus'
        );
    }

    /**
     * partially update status of the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return StatefulSet|mixed
     */
    public function patchStatusAppsV1beta1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta1NamespacedStatefulSetStatus'
        );
    }

    /**
     * list or watch objects of kind StatefulSet
     *
     * @return StatefulSetList|mixed
     */
    public function listForAllNamespacesAppsV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/statefulsets"
        		,[
        		]
        	)
        	, 'listAppsV1beta1StatefulSetForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of StatefulSet
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchListAppsV1beta1(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/watch/namespaces/{$namespace}/statefulsets"
        		,[
        		]
        	)
        	, 'watchAppsV1beta1NamespacedStatefulSetList'
        );
    }

    /**
     * watch changes to an object of kind StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchAppsV1beta1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/watch/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        		]
        	)
        	, 'watchAppsV1beta1NamespacedStatefulSet'
        );
    }

    /**
     * watch individual changes to a list of StatefulSet
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesAppsV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/watch/statefulsets"
        		,[
        		]
        	)
        	, 'watchAppsV1beta1StatefulSetListForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind StatefulSet
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
     * @return StatefulSetList|mixed
     */
    public function listAppsV1beta2(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/statefulsets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAppsV1beta2NamespacedStatefulSet'
        );
    }

    /**
     * create a StatefulSet
     *
     * @param string $namespace
     * @param StatefulSet $Model
     * @return StatefulSet|mixed
     */
    public function createAppsV1beta2(string $namespace = 'default', \StatefulSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/statefulsets"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAppsV1beta2NamespacedStatefulSet'
        );
    }

    /**
     * delete collection of StatefulSet
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
        		"/apis/apps/v1beta2/namespaces/{$namespace}/statefulsets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1beta2CollectionNamespacedStatefulSet'
        );
    }

    /**
     * read the specified StatefulSet
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return StatefulSet|mixed
     */
    public function readAppsV1beta2(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAppsV1beta2NamespacedStatefulSet'
        );
    }

    /**
     * replace the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @param StatefulSet $Model
     * @return StatefulSet|mixed
     */
    public function replaceAppsV1beta2(string $namespace = 'default', $name, \StatefulSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta2NamespacedStatefulSet'
        );
    }

    /**
     * delete a StatefulSet
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
        		"/apis/apps/v1beta2/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1beta2NamespacedStatefulSet'
        );
    }

    /**
     * partially update the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return StatefulSet|mixed
     */
    public function patchAppsV1beta2(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta2NamespacedStatefulSet'
        );
    }

    /**
     * read status of the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @return StatefulSet|mixed
     */
    public function readStatusAppsV1beta2(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/statefulsets/{$name}/status"
        		,[
        		]
        	)
        	, 'readAppsV1beta2NamespacedStatefulSetStatus'
        );
    }

    /**
     * replace status of the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @param StatefulSet $Model
     * @return StatefulSet|mixed
     */
    public function replaceStatusAppsV1beta2(string $namespace = 'default', $name, \StatefulSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/statefulsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta2NamespacedStatefulSetStatus'
        );
    }

    /**
     * partially update status of the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return StatefulSet|mixed
     */
    public function patchStatusAppsV1beta2(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/statefulsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta2NamespacedStatefulSetStatus'
        );
    }

    /**
     * list or watch objects of kind StatefulSet
     *
     * @return StatefulSetList|mixed
     */
    public function listForAllNamespacesAppsV1beta2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/statefulsets"
        		,[
        		]
        	)
        	, 'listAppsV1beta2StatefulSetForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of StatefulSet
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchListAppsV1beta2(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/watch/namespaces/{$namespace}/statefulsets"
        		,[
        		]
        	)
        	, 'watchAppsV1beta2NamespacedStatefulSetList'
        );
    }

    /**
     * watch changes to an object of kind StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchAppsV1beta2(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/watch/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        		]
        	)
        	, 'watchAppsV1beta2NamespacedStatefulSet'
        );
    }

    /**
     * watch individual changes to a list of StatefulSet
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesAppsV1beta2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/watch/statefulsets"
        		,[
        		]
        	)
        	, 'watchAppsV1beta2StatefulSetListForAllNamespaces'
        );
    }


}


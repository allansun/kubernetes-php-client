<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Apps\V1\DaemonSetList as DaemonSetList;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1\DaemonSet as DaemonSet;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\DaemonSetList as DaemonSetList;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\DaemonSet as DaemonSet;
use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\DaemonSetList as DaemonSetList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\DaemonSet as DaemonSet;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class DaemonSet extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind DaemonSet
     *
     * @return DaemonSetList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/daemonsets"
        		,[
        		]
        	)
        	, 'listAppsV1DaemonSetForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind DaemonSet
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
     * @return DaemonSetList|mixed
     */
    public function list(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/namespaces/{$namespace}/daemonsets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAppsV1NamespacedDaemonSet'
        );
    }

    /**
     * create a DaemonSet
     *
     * @param string $namespace
     * @param DaemonSet $Model
     * @return DaemonSet|mixed
     */
    public function create(string $namespace = 'default', \DaemonSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1/namespaces/{$namespace}/daemonsets"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAppsV1NamespacedDaemonSet'
        );
    }

    /**
     * delete collection of DaemonSet
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
        		"/apis/apps/v1/namespaces/{$namespace}/daemonsets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1CollectionNamespacedDaemonSet'
        );
    }

    /**
     * read the specified DaemonSet
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return DaemonSet|mixed
     */
    public function read(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/namespaces/{$namespace}/daemonsets/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAppsV1NamespacedDaemonSet'
        );
    }

    /**
     * replace the specified DaemonSet
     *
     * @param string $namespace
     * @param $name
     * @param DaemonSet $Model
     * @return DaemonSet|mixed
     */
    public function replace(string $namespace = 'default', $name, \DaemonSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/daemonsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1NamespacedDaemonSet'
        );
    }

    /**
     * delete a DaemonSet
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
        		"/apis/apps/v1/namespaces/{$namespace}/daemonsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1NamespacedDaemonSet'
        );
    }

    /**
     * partially update the specified DaemonSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return DaemonSet|mixed
     */
    public function patch(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/daemonsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1NamespacedDaemonSet'
        );
    }

    /**
     * read status of the specified DaemonSet
     *
     * @param string $namespace
     * @param $name
     * @return DaemonSet|mixed
     */
    public function readStatus(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/namespaces/{$namespace}/daemonsets/{$name}/status"
        		,[
        		]
        	)
        	, 'readAppsV1NamespacedDaemonSetStatus'
        );
    }

    /**
     * replace status of the specified DaemonSet
     *
     * @param string $namespace
     * @param $name
     * @param DaemonSet $Model
     * @return DaemonSet|mixed
     */
    public function replaceStatus(string $namespace = 'default', $name, \DaemonSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/daemonsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1NamespacedDaemonSetStatus'
        );
    }

    /**
     * partially update status of the specified DaemonSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return DaemonSet|mixed
     */
    public function patchStatus(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/daemonsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1NamespacedDaemonSetStatus'
        );
    }

    /**
     * watch individual changes to a list of DaemonSet
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/watch/daemonsets"
        		,[
        		]
        	)
        	, 'watchAppsV1DaemonSetListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of DaemonSet
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchList(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/watch/namespaces/{$namespace}/daemonsets"
        		,[
        		]
        	)
        	, 'watchAppsV1NamespacedDaemonSetList'
        );
    }

    /**
     * watch changes to an object of kind DaemonSet
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/watch/namespaces/{$namespace}/daemonsets/{$name}"
        		,[
        		]
        	)
        	, 'watchAppsV1NamespacedDaemonSet'
        );
    }

    /**
     * list or watch objects of kind DaemonSet
     *
     * @return DaemonSetList|mixed
     */
    public function listForAllNamespacesAppsV1beta2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/daemonsets"
        		,[
        		]
        	)
        	, 'listAppsV1beta2DaemonSetForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind DaemonSet
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
     * @return DaemonSetList|mixed
     */
    public function listAppsV1beta2(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/daemonsets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAppsV1beta2NamespacedDaemonSet'
        );
    }

    /**
     * create a DaemonSet
     *
     * @param string $namespace
     * @param DaemonSet $Model
     * @return DaemonSet|mixed
     */
    public function createAppsV1beta2(string $namespace = 'default', \DaemonSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/daemonsets"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAppsV1beta2NamespacedDaemonSet'
        );
    }

    /**
     * delete collection of DaemonSet
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
        		"/apis/apps/v1beta2/namespaces/{$namespace}/daemonsets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1beta2CollectionNamespacedDaemonSet'
        );
    }

    /**
     * read the specified DaemonSet
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return DaemonSet|mixed
     */
    public function readAppsV1beta2(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/daemonsets/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAppsV1beta2NamespacedDaemonSet'
        );
    }

    /**
     * replace the specified DaemonSet
     *
     * @param string $namespace
     * @param $name
     * @param DaemonSet $Model
     * @return DaemonSet|mixed
     */
    public function replaceAppsV1beta2(string $namespace = 'default', $name, \DaemonSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/daemonsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta2NamespacedDaemonSet'
        );
    }

    /**
     * delete a DaemonSet
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
        		"/apis/apps/v1beta2/namespaces/{$namespace}/daemonsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1beta2NamespacedDaemonSet'
        );
    }

    /**
     * partially update the specified DaemonSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return DaemonSet|mixed
     */
    public function patchAppsV1beta2(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/daemonsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta2NamespacedDaemonSet'
        );
    }

    /**
     * read status of the specified DaemonSet
     *
     * @param string $namespace
     * @param $name
     * @return DaemonSet|mixed
     */
    public function readStatusAppsV1beta2(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/daemonsets/{$name}/status"
        		,[
        		]
        	)
        	, 'readAppsV1beta2NamespacedDaemonSetStatus'
        );
    }

    /**
     * replace status of the specified DaemonSet
     *
     * @param string $namespace
     * @param $name
     * @param DaemonSet $Model
     * @return DaemonSet|mixed
     */
    public function replaceStatusAppsV1beta2(string $namespace = 'default', $name, \DaemonSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/daemonsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta2NamespacedDaemonSetStatus'
        );
    }

    /**
     * partially update status of the specified DaemonSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return DaemonSet|mixed
     */
    public function patchStatusAppsV1beta2(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/daemonsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta2NamespacedDaemonSetStatus'
        );
    }

    /**
     * watch individual changes to a list of DaemonSet
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesAppsV1beta2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/watch/daemonsets"
        		,[
        		]
        	)
        	, 'watchAppsV1beta2DaemonSetListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of DaemonSet
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchListAppsV1beta2(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/watch/namespaces/{$namespace}/daemonsets"
        		,[
        		]
        	)
        	, 'watchAppsV1beta2NamespacedDaemonSetList'
        );
    }

    /**
     * watch changes to an object of kind DaemonSet
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchAppsV1beta2(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/watch/namespaces/{$namespace}/daemonsets/{$name}"
        		,[
        		]
        	)
        	, 'watchAppsV1beta2NamespacedDaemonSet'
        );
    }

    /**
     * list or watch objects of kind DaemonSet
     *
     * @return DaemonSetList|mixed
     */
    public function listForAllNamespacesExtensionsV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/daemonsets"
        		,[
        		]
        	)
        	, 'listExtensionsV1beta1DaemonSetForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind DaemonSet
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
     * @return DaemonSetList|mixed
     */
    public function listExtensionsV1beta1(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/daemonsets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listExtensionsV1beta1NamespacedDaemonSet'
        );
    }

    /**
     * create a DaemonSet
     *
     * @param string $namespace
     * @param DaemonSet $Model
     * @return DaemonSet|mixed
     */
    public function createExtensionsV1beta1(string $namespace = 'default', \DaemonSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/daemonsets"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createExtensionsV1beta1NamespacedDaemonSet'
        );
    }

    /**
     * delete collection of DaemonSet
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
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/daemonsets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteExtensionsV1beta1CollectionNamespacedDaemonSet'
        );
    }

    /**
     * read the specified DaemonSet
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return DaemonSet|mixed
     */
    public function readExtensionsV1beta1(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/daemonsets/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readExtensionsV1beta1NamespacedDaemonSet'
        );
    }

    /**
     * replace the specified DaemonSet
     *
     * @param string $namespace
     * @param $name
     * @param DaemonSet $Model
     * @return DaemonSet|mixed
     */
    public function replaceExtensionsV1beta1(string $namespace = 'default', $name, \DaemonSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/daemonsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceExtensionsV1beta1NamespacedDaemonSet'
        );
    }

    /**
     * delete a DaemonSet
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
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/daemonsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteExtensionsV1beta1NamespacedDaemonSet'
        );
    }

    /**
     * partially update the specified DaemonSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return DaemonSet|mixed
     */
    public function patchExtensionsV1beta1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/daemonsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchExtensionsV1beta1NamespacedDaemonSet'
        );
    }

    /**
     * read status of the specified DaemonSet
     *
     * @param string $namespace
     * @param $name
     * @return DaemonSet|mixed
     */
    public function readStatusExtensionsV1beta1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/daemonsets/{$name}/status"
        		,[
        		]
        	)
        	, 'readExtensionsV1beta1NamespacedDaemonSetStatus'
        );
    }

    /**
     * replace status of the specified DaemonSet
     *
     * @param string $namespace
     * @param $name
     * @param DaemonSet $Model
     * @return DaemonSet|mixed
     */
    public function replaceStatusExtensionsV1beta1(string $namespace = 'default', $name, \DaemonSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/daemonsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceExtensionsV1beta1NamespacedDaemonSetStatus'
        );
    }

    /**
     * partially update status of the specified DaemonSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return DaemonSet|mixed
     */
    public function patchStatusExtensionsV1beta1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/daemonsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchExtensionsV1beta1NamespacedDaemonSetStatus'
        );
    }

    /**
     * watch individual changes to a list of DaemonSet
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesExtensionsV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/daemonsets"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1DaemonSetListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of DaemonSet
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchListExtensionsV1beta1(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/namespaces/{$namespace}/daemonsets"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1NamespacedDaemonSetList'
        );
    }

    /**
     * watch changes to an object of kind DaemonSet
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchExtensionsV1beta1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/namespaces/{$namespace}/daemonsets/{$name}"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1NamespacedDaemonSet'
        );
    }


}


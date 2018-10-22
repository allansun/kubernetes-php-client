<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Apps\V1\DaemonSetList as DaemonSetList;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1\DaemonSet as TheDaemonSet;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\DaemonSetList as DaemonSetListV1beta2;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\DaemonSet as TheDaemonSetV1beta2;
use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\DaemonSetList as DaemonSetListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\DaemonSet as TheDaemonSetV1beta1;

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
     * @param $namespace
     * @param array $queries
     * @return DaemonSetList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
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
     * @param $namespace
     * @param TheDaemonSet $Model
     * @return TheDaemonSet|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Apps\V1\DaemonSet $Model)
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
     * @param $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection($namespace = 'default', array $queries = [])
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
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheDaemonSet|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
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
     * @param $namespace
     * @param $name
     * @param TheDaemonSet $Model
     * @return TheDaemonSet|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1\DaemonSet $Model)
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheDaemonSet|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * @param $namespace
     * @param $name
     * @return TheDaemonSet|mixed
     */
    public function readStatus($namespace = 'default', $name)
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
     * @param $namespace
     * @param $name
     * @param TheDaemonSet $Model
     * @return TheDaemonSet|mixed
     */
    public function replaceStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1\DaemonSet $Model)
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheDaemonSet|mixed
     */
    public function patchStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * watch individual changes to a list of DaemonSet. deprecated: use the 'watch'
     * parameter with a list operation instead.
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
     * watch individual changes to a list of DaemonSet. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
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
     * watch changes to an object of kind DaemonSet. deprecated: use the 'watch'
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
     * @return DaemonSetListV1beta2|mixed
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
     * @param $namespace
     * @param array $queries
     * @return DaemonSetListV1beta2|mixed
     */
    public function listAppsV1beta2($namespace = 'default', array $queries = [])
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
     * @param $namespace
     * @param TheDaemonSetV1beta2 $Model
     * @return TheDaemonSetV1beta2|mixed
     */
    public function createAppsV1beta2($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\DaemonSet $Model)
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
     * @param $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollectionAppsV1beta2($namespace = 'default', array $queries = [])
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
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheDaemonSetV1beta2|mixed
     */
    public function readAppsV1beta2($namespace = 'default', $name, array $queries = [])
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
     * @param $namespace
     * @param $name
     * @param TheDaemonSetV1beta2 $Model
     * @return TheDaemonSetV1beta2|mixed
     */
    public function replaceAppsV1beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\DaemonSet $Model)
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
    public function deleteAppsV1beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheDaemonSetV1beta2|mixed
     */
    public function patchAppsV1beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * @param $namespace
     * @param $name
     * @return TheDaemonSetV1beta2|mixed
     */
    public function readStatusAppsV1beta2($namespace = 'default', $name)
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
     * @param $namespace
     * @param $name
     * @param TheDaemonSetV1beta2 $Model
     * @return TheDaemonSetV1beta2|mixed
     */
    public function replaceStatusAppsV1beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\DaemonSet $Model)
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheDaemonSetV1beta2|mixed
     */
    public function patchStatusAppsV1beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * watch individual changes to a list of DaemonSet. deprecated: use the 'watch'
     * parameter with a list operation instead.
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
     * watch individual changes to a list of DaemonSet. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchListAppsV1beta2($namespace = 'default')
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
     * watch changes to an object of kind DaemonSet. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchAppsV1beta2($namespace = 'default', $name)
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
     * @return DaemonSetListV1beta1|mixed
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
     * @param $namespace
     * @param array $queries
     * @return DaemonSetListV1beta1|mixed
     */
    public function listExtensionsV1beta1($namespace = 'default', array $queries = [])
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
     * @param $namespace
     * @param TheDaemonSetV1beta1 $Model
     * @return TheDaemonSetV1beta1|mixed
     */
    public function createExtensionsV1beta1($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\DaemonSet $Model)
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
     * @param $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollectionExtensionsV1beta1($namespace = 'default', array $queries = [])
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
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheDaemonSetV1beta1|mixed
     */
    public function readExtensionsV1beta1($namespace = 'default', $name, array $queries = [])
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
     * @param $namespace
     * @param $name
     * @param TheDaemonSetV1beta1 $Model
     * @return TheDaemonSetV1beta1|mixed
     */
    public function replaceExtensionsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\DaemonSet $Model)
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
    public function deleteExtensionsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheDaemonSetV1beta1|mixed
     */
    public function patchExtensionsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * @param $namespace
     * @param $name
     * @return TheDaemonSetV1beta1|mixed
     */
    public function readStatusExtensionsV1beta1($namespace = 'default', $name)
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
     * @param $namespace
     * @param $name
     * @param TheDaemonSetV1beta1 $Model
     * @return TheDaemonSetV1beta1|mixed
     */
    public function replaceStatusExtensionsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\DaemonSet $Model)
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheDaemonSetV1beta1|mixed
     */
    public function patchStatusExtensionsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * watch individual changes to a list of DaemonSet. deprecated: use the 'watch'
     * parameter with a list operation instead.
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
     * watch individual changes to a list of DaemonSet. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchListExtensionsV1beta1($namespace = 'default')
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
     * watch changes to an object of kind DaemonSet. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchExtensionsV1beta1($namespace = 'default', $name)
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


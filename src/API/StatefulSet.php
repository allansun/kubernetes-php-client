<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Apps\V1\StatefulSetList as StatefulSetList;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1\StatefulSet as TheStatefulSet;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\StatefulSetList as StatefulSetListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\StatefulSet as TheStatefulSetV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\StatefulSetList as StatefulSetListV1beta2;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\StatefulSet as TheStatefulSetV1beta2;

class StatefulSet extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind StatefulSet
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param $namespace
     * @param array $queries
     * @return StatefulSetList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param TheStatefulSet $Model
     * @param array $queries
     * @return TheStatefulSet|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Apps\V1\StatefulSet $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
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
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
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
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheStatefulSet|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param TheStatefulSet $Model
     * @param array $queries
     * @return TheStatefulSet|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1\StatefulSet $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAppsV1NamespacedStatefulSet'
        );
    }

    /**
     * delete a StatefulSet
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheStatefulSet|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAppsV1NamespacedStatefulSet'
        );
    }

    /**
     * read status of the specified StatefulSet
     *
     * @param $namespace
     * @param $name
     * @return TheStatefulSet|mixed
     */
    public function readStatus($namespace = 'default', $name)
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param TheStatefulSet $Model
     * @param array $queries
     * @return TheStatefulSet|mixed
     */
    public function replaceStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1\StatefulSet $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAppsV1NamespacedStatefulSetStatus'
        );
    }

    /**
     * partially update status of the specified StatefulSet
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheStatefulSet|mixed
     */
    public function patchStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
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
     * watch individual changes to a list of StatefulSet. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
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
     * watch changes to an object of kind StatefulSet. deprecated: use the 'watch'
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
        		"/apis/apps/v1/watch/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        		]
        	)
        	, 'watchAppsV1NamespacedStatefulSet'
        );
    }

    /**
     * watch individual changes to a list of StatefulSet. deprecated: use the 'watch'
     * parameter with a list operation instead.
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
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param $namespace
     * @param array $queries
     * @return StatefulSetListV1beta1|mixed
     */
    public function listAppsV1beta1($namespace = 'default', array $queries = [])
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param TheStatefulSetV1beta1 $Model
     * @param array $queries
     * @return TheStatefulSetV1beta1|mixed
     */
    public function createAppsV1beta1($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\StatefulSet $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
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
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollectionAppsV1beta1($namespace = 'default', array $queries = [])
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
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheStatefulSetV1beta1|mixed
     */
    public function readAppsV1beta1($namespace = 'default', $name, array $queries = [])
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param TheStatefulSetV1beta1 $Model
     * @param array $queries
     * @return TheStatefulSetV1beta1|mixed
     */
    public function replaceAppsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\StatefulSet $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAppsV1beta1NamespacedStatefulSet'
        );
    }

    /**
     * delete a StatefulSet
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
    public function deleteAppsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheStatefulSetV1beta1|mixed
     */
    public function patchAppsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAppsV1beta1NamespacedStatefulSet'
        );
    }

    /**
     * read status of the specified StatefulSet
     *
     * @param $namespace
     * @param $name
     * @return TheStatefulSetV1beta1|mixed
     */
    public function readStatusAppsV1beta1($namespace = 'default', $name)
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param TheStatefulSetV1beta1 $Model
     * @param array $queries
     * @return TheStatefulSetV1beta1|mixed
     */
    public function replaceStatusAppsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\StatefulSet $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAppsV1beta1NamespacedStatefulSetStatus'
        );
    }

    /**
     * partially update status of the specified StatefulSet
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheStatefulSetV1beta1|mixed
     */
    public function patchStatusAppsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAppsV1beta1NamespacedStatefulSetStatus'
        );
    }

    /**
     * list or watch objects of kind StatefulSet
     *
     * @return StatefulSetListV1beta1|mixed
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
     * watch individual changes to a list of StatefulSet. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchListAppsV1beta1($namespace = 'default')
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
     * watch changes to an object of kind StatefulSet. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchAppsV1beta1($namespace = 'default', $name)
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
     * watch individual changes to a list of StatefulSet. deprecated: use the 'watch'
     * parameter with a list operation instead.
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
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param $namespace
     * @param array $queries
     * @return StatefulSetListV1beta2|mixed
     */
    public function listAppsV1beta2($namespace = 'default', array $queries = [])
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param TheStatefulSetV1beta2 $Model
     * @param array $queries
     * @return TheStatefulSetV1beta2|mixed
     */
    public function createAppsV1beta2($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\StatefulSet $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/statefulsets"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
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
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
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
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheStatefulSetV1beta2|mixed
     */
    public function readAppsV1beta2($namespace = 'default', $name, array $queries = [])
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param TheStatefulSetV1beta2 $Model
     * @param array $queries
     * @return TheStatefulSetV1beta2|mixed
     */
    public function replaceAppsV1beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\StatefulSet $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAppsV1beta2NamespacedStatefulSet'
        );
    }

    /**
     * delete a StatefulSet
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheStatefulSetV1beta2|mixed
     */
    public function patchAppsV1beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAppsV1beta2NamespacedStatefulSet'
        );
    }

    /**
     * read status of the specified StatefulSet
     *
     * @param $namespace
     * @param $name
     * @return TheStatefulSetV1beta2|mixed
     */
    public function readStatusAppsV1beta2($namespace = 'default', $name)
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param TheStatefulSetV1beta2 $Model
     * @param array $queries
     * @return TheStatefulSetV1beta2|mixed
     */
    public function replaceStatusAppsV1beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\StatefulSet $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/statefulsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAppsV1beta2NamespacedStatefulSetStatus'
        );
    }

    /**
     * partially update status of the specified StatefulSet
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheStatefulSetV1beta2|mixed
     */
    public function patchStatusAppsV1beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/statefulsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAppsV1beta2NamespacedStatefulSetStatus'
        );
    }

    /**
     * list or watch objects of kind StatefulSet
     *
     * @return StatefulSetListV1beta2|mixed
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
     * watch individual changes to a list of StatefulSet. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchListAppsV1beta2($namespace = 'default')
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
     * watch changes to an object of kind StatefulSet. deprecated: use the 'watch'
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
        		"/apis/apps/v1beta2/watch/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        		]
        	)
        	, 'watchAppsV1beta2NamespacedStatefulSet'
        );
    }

    /**
     * watch individual changes to a list of StatefulSet. deprecated: use the 'watch'
     * parameter with a list operation instead.
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


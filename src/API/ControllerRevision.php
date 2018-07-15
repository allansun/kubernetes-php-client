<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Apps\V1\ControllerRevisionList as ControllerRevisionList;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1\ControllerRevision as ControllerRevision;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\ControllerRevisionList as ControllerRevisionList;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\ControllerRevision as ControllerRevision;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\ControllerRevisionList as ControllerRevisionList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\ControllerRevision as ControllerRevision;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class ControllerRevision extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind ControllerRevision
     *
     * @return ControllerRevisionList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/controllerrevisions"
        		,[
        		]
        	)
        	, 'listAppsV1ControllerRevisionForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind ControllerRevision
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
     * @return ControllerRevisionList|mixed
     */
    public function list(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/namespaces/{$namespace}/controllerrevisions"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAppsV1NamespacedControllerRevision'
        );
    }

    /**
     * create a ControllerRevision
     *
     * @param string $namespace
     * @param ControllerRevision $Model
     * @return ControllerRevision|mixed
     */
    public function create(string $namespace = 'default', \ControllerRevision $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1/namespaces/{$namespace}/controllerrevisions"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAppsV1NamespacedControllerRevision'
        );
    }

    /**
     * delete collection of ControllerRevision
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
        		"/apis/apps/v1/namespaces/{$namespace}/controllerrevisions"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1CollectionNamespacedControllerRevision'
        );
    }

    /**
     * read the specified ControllerRevision
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return ControllerRevision|mixed
     */
    public function read(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/namespaces/{$namespace}/controllerrevisions/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAppsV1NamespacedControllerRevision'
        );
    }

    /**
     * replace the specified ControllerRevision
     *
     * @param string $namespace
     * @param $name
     * @param ControllerRevision $Model
     * @return ControllerRevision|mixed
     */
    public function replace(string $namespace = 'default', $name, \ControllerRevision $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/controllerrevisions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1NamespacedControllerRevision'
        );
    }

    /**
     * delete a ControllerRevision
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
        		"/apis/apps/v1/namespaces/{$namespace}/controllerrevisions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1NamespacedControllerRevision'
        );
    }

    /**
     * partially update the specified ControllerRevision
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return ControllerRevision|mixed
     */
    public function patch(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/controllerrevisions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1NamespacedControllerRevision'
        );
    }

    /**
     * watch individual changes to a list of ControllerRevision
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/watch/controllerrevisions"
        		,[
        		]
        	)
        	, 'watchAppsV1ControllerRevisionListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of ControllerRevision
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchList(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/watch/namespaces/{$namespace}/controllerrevisions"
        		,[
        		]
        	)
        	, 'watchAppsV1NamespacedControllerRevisionList'
        );
    }

    /**
     * watch changes to an object of kind ControllerRevision
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/watch/namespaces/{$namespace}/controllerrevisions/{$name}"
        		,[
        		]
        	)
        	, 'watchAppsV1NamespacedControllerRevision'
        );
    }

    /**
     * list or watch objects of kind ControllerRevision
     *
     * @return ControllerRevisionList|mixed
     */
    public function listForAllNamespacesAppsV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/controllerrevisions"
        		,[
        		]
        	)
        	, 'listAppsV1beta1ControllerRevisionForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind ControllerRevision
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
     * @return ControllerRevisionList|mixed
     */
    public function listAppsV1beta1(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/controllerrevisions"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAppsV1beta1NamespacedControllerRevision'
        );
    }

    /**
     * create a ControllerRevision
     *
     * @param string $namespace
     * @param ControllerRevision $Model
     * @return ControllerRevision|mixed
     */
    public function createAppsV1beta1(string $namespace = 'default', \ControllerRevision $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/controllerrevisions"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAppsV1beta1NamespacedControllerRevision'
        );
    }

    /**
     * delete collection of ControllerRevision
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
        		"/apis/apps/v1beta1/namespaces/{$namespace}/controllerrevisions"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1beta1CollectionNamespacedControllerRevision'
        );
    }

    /**
     * read the specified ControllerRevision
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return ControllerRevision|mixed
     */
    public function readAppsV1beta1(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/controllerrevisions/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAppsV1beta1NamespacedControllerRevision'
        );
    }

    /**
     * replace the specified ControllerRevision
     *
     * @param string $namespace
     * @param $name
     * @param ControllerRevision $Model
     * @return ControllerRevision|mixed
     */
    public function replaceAppsV1beta1(string $namespace = 'default', $name, \ControllerRevision $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/controllerrevisions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta1NamespacedControllerRevision'
        );
    }

    /**
     * delete a ControllerRevision
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
        		"/apis/apps/v1beta1/namespaces/{$namespace}/controllerrevisions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1beta1NamespacedControllerRevision'
        );
    }

    /**
     * partially update the specified ControllerRevision
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return ControllerRevision|mixed
     */
    public function patchAppsV1beta1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/controllerrevisions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta1NamespacedControllerRevision'
        );
    }

    /**
     * watch individual changes to a list of ControllerRevision
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesAppsV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/watch/controllerrevisions"
        		,[
        		]
        	)
        	, 'watchAppsV1beta1ControllerRevisionListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of ControllerRevision
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchListAppsV1beta1(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/watch/namespaces/{$namespace}/controllerrevisions"
        		,[
        		]
        	)
        	, 'watchAppsV1beta1NamespacedControllerRevisionList'
        );
    }

    /**
     * watch changes to an object of kind ControllerRevision
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchAppsV1beta1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/watch/namespaces/{$namespace}/controllerrevisions/{$name}"
        		,[
        		]
        	)
        	, 'watchAppsV1beta1NamespacedControllerRevision'
        );
    }

    /**
     * list or watch objects of kind ControllerRevision
     *
     * @return ControllerRevisionList|mixed
     */
    public function listForAllNamespacesAppsV1beta2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/controllerrevisions"
        		,[
        		]
        	)
        	, 'listAppsV1beta2ControllerRevisionForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind ControllerRevision
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
     * @return ControllerRevisionList|mixed
     */
    public function listAppsV1beta2(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/controllerrevisions"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAppsV1beta2NamespacedControllerRevision'
        );
    }

    /**
     * create a ControllerRevision
     *
     * @param string $namespace
     * @param ControllerRevision $Model
     * @return ControllerRevision|mixed
     */
    public function createAppsV1beta2(string $namespace = 'default', \ControllerRevision $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/controllerrevisions"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAppsV1beta2NamespacedControllerRevision'
        );
    }

    /**
     * delete collection of ControllerRevision
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
        		"/apis/apps/v1beta2/namespaces/{$namespace}/controllerrevisions"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1beta2CollectionNamespacedControllerRevision'
        );
    }

    /**
     * read the specified ControllerRevision
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return ControllerRevision|mixed
     */
    public function readAppsV1beta2(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/controllerrevisions/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAppsV1beta2NamespacedControllerRevision'
        );
    }

    /**
     * replace the specified ControllerRevision
     *
     * @param string $namespace
     * @param $name
     * @param ControllerRevision $Model
     * @return ControllerRevision|mixed
     */
    public function replaceAppsV1beta2(string $namespace = 'default', $name, \ControllerRevision $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/controllerrevisions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta2NamespacedControllerRevision'
        );
    }

    /**
     * delete a ControllerRevision
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
        		"/apis/apps/v1beta2/namespaces/{$namespace}/controllerrevisions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1beta2NamespacedControllerRevision'
        );
    }

    /**
     * partially update the specified ControllerRevision
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return ControllerRevision|mixed
     */
    public function patchAppsV1beta2(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/controllerrevisions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta2NamespacedControllerRevision'
        );
    }

    /**
     * watch individual changes to a list of ControllerRevision
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesAppsV1beta2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/watch/controllerrevisions"
        		,[
        		]
        	)
        	, 'watchAppsV1beta2ControllerRevisionListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of ControllerRevision
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchListAppsV1beta2(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/watch/namespaces/{$namespace}/controllerrevisions"
        		,[
        		]
        	)
        	, 'watchAppsV1beta2NamespacedControllerRevisionList'
        );
    }

    /**
     * watch changes to an object of kind ControllerRevision
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchAppsV1beta2(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/watch/namespaces/{$namespace}/controllerrevisions/{$name}"
        		,[
        		]
        	)
        	, 'watchAppsV1beta2NamespacedControllerRevision'
        );
    }


}


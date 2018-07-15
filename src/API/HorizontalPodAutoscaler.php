<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\HorizontalPodAutoscalerList as HorizontalPodAutoscalerList;
use \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\HorizontalPodAutoscaler as HorizontalPodAutoscaler;
use \Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta1\HorizontalPodAutoscalerList as HorizontalPodAutoscalerList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta1\HorizontalPodAutoscaler as HorizontalPodAutoscaler;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class HorizontalPodAutoscaler extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind HorizontalPodAutoscaler
     *
     * @return HorizontalPodAutoscalerList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v1/horizontalpodautoscalers"
        		,[
        		]
        	)
        	, 'listAutoscalingV1HorizontalPodAutoscalerForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind HorizontalPodAutoscaler
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
     * @return HorizontalPodAutoscalerList|mixed
     */
    public function list(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v1/namespaces/{$namespace}/horizontalpodautoscalers"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAutoscalingV1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * create a HorizontalPodAutoscaler
     *
     * @param string $namespace
     * @param HorizontalPodAutoscaler $Model
     * @return HorizontalPodAutoscaler|mixed
     */
    public function create(string $namespace = 'default', \HorizontalPodAutoscaler $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/autoscaling/v1/namespaces/{$namespace}/horizontalpodautoscalers"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAutoscalingV1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * delete collection of HorizontalPodAutoscaler
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
        		"/apis/autoscaling/v1/namespaces/{$namespace}/horizontalpodautoscalers"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAutoscalingV1CollectionNamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * read the specified HorizontalPodAutoscaler
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return HorizontalPodAutoscaler|mixed
     */
    public function read(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAutoscalingV1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * replace the specified HorizontalPodAutoscaler
     *
     * @param string $namespace
     * @param $name
     * @param HorizontalPodAutoscaler $Model
     * @return HorizontalPodAutoscaler|mixed
     */
    public function replace(string $namespace = 'default', $name, \HorizontalPodAutoscaler $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/autoscaling/v1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAutoscalingV1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * delete a HorizontalPodAutoscaler
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
        		"/apis/autoscaling/v1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAutoscalingV1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * partially update the specified HorizontalPodAutoscaler
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return HorizontalPodAutoscaler|mixed
     */
    public function patch(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/autoscaling/v1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAutoscalingV1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * read status of the specified HorizontalPodAutoscaler
     *
     * @param string $namespace
     * @param $name
     * @return HorizontalPodAutoscaler|mixed
     */
    public function readStatus(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}/status"
        		,[
        		]
        	)
        	, 'readAutoscalingV1NamespacedHorizontalPodAutoscalerStatus'
        );
    }

    /**
     * replace status of the specified HorizontalPodAutoscaler
     *
     * @param string $namespace
     * @param $name
     * @param HorizontalPodAutoscaler $Model
     * @return HorizontalPodAutoscaler|mixed
     */
    public function replaceStatus(string $namespace = 'default', $name, \HorizontalPodAutoscaler $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/autoscaling/v1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAutoscalingV1NamespacedHorizontalPodAutoscalerStatus'
        );
    }

    /**
     * partially update status of the specified HorizontalPodAutoscaler
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return HorizontalPodAutoscaler|mixed
     */
    public function patchStatus(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/autoscaling/v1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAutoscalingV1NamespacedHorizontalPodAutoscalerStatus'
        );
    }

    /**
     * watch individual changes to a list of HorizontalPodAutoscaler
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v1/watch/horizontalpodautoscalers"
        		,[
        		]
        	)
        	, 'watchAutoscalingV1HorizontalPodAutoscalerListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of HorizontalPodAutoscaler
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchList(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v1/watch/namespaces/{$namespace}/horizontalpodautoscalers"
        		,[
        		]
        	)
        	, 'watchAutoscalingV1NamespacedHorizontalPodAutoscalerList'
        );
    }

    /**
     * watch changes to an object of kind HorizontalPodAutoscaler
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v1/watch/namespaces/{$namespace}/horizontalpodautoscalers/{$name}"
        		,[
        		]
        	)
        	, 'watchAutoscalingV1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * list or watch objects of kind HorizontalPodAutoscaler
     *
     * @return HorizontalPodAutoscalerList|mixed
     */
    public function listForAllNamespacesAutoscalingV2beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2beta1/horizontalpodautoscalers"
        		,[
        		]
        	)
        	, 'listAutoscalingV2beta1HorizontalPodAutoscalerForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind HorizontalPodAutoscaler
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
     * @return HorizontalPodAutoscalerList|mixed
     */
    public function listAutoscalingV2beta1(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2beta1/namespaces/{$namespace}/horizontalpodautoscalers"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAutoscalingV2beta1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * create a HorizontalPodAutoscaler
     *
     * @param string $namespace
     * @param HorizontalPodAutoscaler $Model
     * @return HorizontalPodAutoscaler|mixed
     */
    public function createAutoscalingV2beta1(string $namespace = 'default', \HorizontalPodAutoscaler $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/autoscaling/v2beta1/namespaces/{$namespace}/horizontalpodautoscalers"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAutoscalingV2beta1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * delete collection of HorizontalPodAutoscaler
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
    public function deleteCollectionAutoscalingV2beta1(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/autoscaling/v2beta1/namespaces/{$namespace}/horizontalpodautoscalers"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAutoscalingV2beta1CollectionNamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * read the specified HorizontalPodAutoscaler
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return HorizontalPodAutoscaler|mixed
     */
    public function readAutoscalingV2beta1(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2beta1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAutoscalingV2beta1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * replace the specified HorizontalPodAutoscaler
     *
     * @param string $namespace
     * @param $name
     * @param HorizontalPodAutoscaler $Model
     * @return HorizontalPodAutoscaler|mixed
     */
    public function replaceAutoscalingV2beta1(string $namespace = 'default', $name, \HorizontalPodAutoscaler $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/autoscaling/v2beta1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAutoscalingV2beta1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * delete a HorizontalPodAutoscaler
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
    public function deleteAutoscalingV2beta1(string $namespace = 'default', $name, \DeleteOptions $Model, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/autoscaling/v2beta1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAutoscalingV2beta1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * partially update the specified HorizontalPodAutoscaler
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return HorizontalPodAutoscaler|mixed
     */
    public function patchAutoscalingV2beta1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/autoscaling/v2beta1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAutoscalingV2beta1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * read status of the specified HorizontalPodAutoscaler
     *
     * @param string $namespace
     * @param $name
     * @return HorizontalPodAutoscaler|mixed
     */
    public function readStatusAutoscalingV2beta1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2beta1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}/status"
        		,[
        		]
        	)
        	, 'readAutoscalingV2beta1NamespacedHorizontalPodAutoscalerStatus'
        );
    }

    /**
     * replace status of the specified HorizontalPodAutoscaler
     *
     * @param string $namespace
     * @param $name
     * @param HorizontalPodAutoscaler $Model
     * @return HorizontalPodAutoscaler|mixed
     */
    public function replaceStatusAutoscalingV2beta1(string $namespace = 'default', $name, \HorizontalPodAutoscaler $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/autoscaling/v2beta1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAutoscalingV2beta1NamespacedHorizontalPodAutoscalerStatus'
        );
    }

    /**
     * partially update status of the specified HorizontalPodAutoscaler
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return HorizontalPodAutoscaler|mixed
     */
    public function patchStatusAutoscalingV2beta1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/autoscaling/v2beta1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAutoscalingV2beta1NamespacedHorizontalPodAutoscalerStatus'
        );
    }

    /**
     * watch individual changes to a list of HorizontalPodAutoscaler
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesAutoscalingV2beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2beta1/watch/horizontalpodautoscalers"
        		,[
        		]
        	)
        	, 'watchAutoscalingV2beta1HorizontalPodAutoscalerListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of HorizontalPodAutoscaler
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchListAutoscalingV2beta1(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2beta1/watch/namespaces/{$namespace}/horizontalpodautoscalers"
        		,[
        		]
        	)
        	, 'watchAutoscalingV2beta1NamespacedHorizontalPodAutoscalerList'
        );
    }

    /**
     * watch changes to an object of kind HorizontalPodAutoscaler
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchAutoscalingV2beta1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2beta1/watch/namespaces/{$namespace}/horizontalpodautoscalers/{$name}"
        		,[
        		]
        	)
        	, 'watchAutoscalingV2beta1NamespacedHorizontalPodAutoscaler'
        );
    }


}


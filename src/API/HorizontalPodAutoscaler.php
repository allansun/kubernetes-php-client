<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\HorizontalPodAutoscalerList as HorizontalPodAutoscalerList;
use \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\HorizontalPodAutoscaler as TheHorizontalPodAutoscaler;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta1\HorizontalPodAutoscalerList as HorizontalPodAutoscalerListV2beta1;
use \Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta1\HorizontalPodAutoscaler as TheHorizontalPodAutoscalerV2beta1;
use \Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta2\HorizontalPodAutoscalerList as HorizontalPodAutoscalerListV2beta2;
use \Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta2\HorizontalPodAutoscaler as TheHorizontalPodAutoscalerV2beta2;

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
     * @return HorizontalPodAutoscalerList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param TheHorizontalPodAutoscaler $Model
     * @param array $queries
     * @return TheHorizontalPodAutoscaler|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\HorizontalPodAutoscaler $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/autoscaling/v1/namespaces/{$namespace}/horizontalpodautoscalers"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
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
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheHorizontalPodAutoscaler|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param TheHorizontalPodAutoscaler $Model
     * @param array $queries
     * @return TheHorizontalPodAutoscaler|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\HorizontalPodAutoscaler $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/autoscaling/v1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAutoscalingV1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * delete a HorizontalPodAutoscaler
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheHorizontalPodAutoscaler|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/autoscaling/v1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAutoscalingV1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * read status of the specified HorizontalPodAutoscaler
     *
     * @param $namespace
     * @param $name
     * @return TheHorizontalPodAutoscaler|mixed
     */
    public function readStatus($namespace = 'default', $name)
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param TheHorizontalPodAutoscaler $Model
     * @param array $queries
     * @return TheHorizontalPodAutoscaler|mixed
     */
    public function replaceStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\HorizontalPodAutoscaler $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/autoscaling/v1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAutoscalingV1NamespacedHorizontalPodAutoscalerStatus'
        );
    }

    /**
     * partially update status of the specified HorizontalPodAutoscaler
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheHorizontalPodAutoscaler|mixed
     */
    public function patchStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/autoscaling/v1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAutoscalingV1NamespacedHorizontalPodAutoscalerStatus'
        );
    }

    /**
     * watch individual changes to a list of HorizontalPodAutoscaler. deprecated: use
     * the 'watch' parameter with a list operation instead.
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
     * watch individual changes to a list of HorizontalPodAutoscaler. deprecated: use
     * the 'watch' parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
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
     * watch changes to an object of kind HorizontalPodAutoscaler. deprecated: use the
     * 'watch' parameter with a list operation instead, filtered to a single item with
     * the 'fieldSelector' parameter.
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($namespace = 'default', $name)
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
     * @return HorizontalPodAutoscalerListV2beta1|mixed
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
     * @return HorizontalPodAutoscalerListV2beta1|mixed
     */
    public function listAutoscalingV2beta1($namespace = 'default', array $queries = [])
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param TheHorizontalPodAutoscalerV2beta1 $Model
     * @param array $queries
     * @return TheHorizontalPodAutoscalerV2beta1|mixed
     */
    public function createAutoscalingV2beta1($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta1\HorizontalPodAutoscaler $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/autoscaling/v2beta1/namespaces/{$namespace}/horizontalpodautoscalers"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
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
    public function deleteCollectionAutoscalingV2beta1($namespace = 'default', array $queries = [])
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
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheHorizontalPodAutoscalerV2beta1|mixed
     */
    public function readAutoscalingV2beta1($namespace = 'default', $name, array $queries = [])
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param TheHorizontalPodAutoscalerV2beta1 $Model
     * @param array $queries
     * @return TheHorizontalPodAutoscalerV2beta1|mixed
     */
    public function replaceAutoscalingV2beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta1\HorizontalPodAutoscaler $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/autoscaling/v2beta1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAutoscalingV2beta1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * delete a HorizontalPodAutoscaler
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
    public function deleteAutoscalingV2beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheHorizontalPodAutoscalerV2beta1|mixed
     */
    public function patchAutoscalingV2beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/autoscaling/v2beta1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAutoscalingV2beta1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * read status of the specified HorizontalPodAutoscaler
     *
     * @param $namespace
     * @param $name
     * @return TheHorizontalPodAutoscalerV2beta1|mixed
     */
    public function readStatusAutoscalingV2beta1($namespace = 'default', $name)
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param TheHorizontalPodAutoscalerV2beta1 $Model
     * @param array $queries
     * @return TheHorizontalPodAutoscalerV2beta1|mixed
     */
    public function replaceStatusAutoscalingV2beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta1\HorizontalPodAutoscaler $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/autoscaling/v2beta1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAutoscalingV2beta1NamespacedHorizontalPodAutoscalerStatus'
        );
    }

    /**
     * partially update status of the specified HorizontalPodAutoscaler
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheHorizontalPodAutoscalerV2beta1|mixed
     */
    public function patchStatusAutoscalingV2beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/autoscaling/v2beta1/namespaces/{$namespace}/horizontalpodautoscalers/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAutoscalingV2beta1NamespacedHorizontalPodAutoscalerStatus'
        );
    }

    /**
     * watch individual changes to a list of HorizontalPodAutoscaler. deprecated: use
     * the 'watch' parameter with a list operation instead.
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
     * watch individual changes to a list of HorizontalPodAutoscaler. deprecated: use
     * the 'watch' parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchListAutoscalingV2beta1($namespace = 'default')
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
     * watch changes to an object of kind HorizontalPodAutoscaler. deprecated: use the
     * 'watch' parameter with a list operation instead, filtered to a single item with
     * the 'fieldSelector' parameter.
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchAutoscalingV2beta1($namespace = 'default', $name)
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

    /**
     * list or watch objects of kind HorizontalPodAutoscaler
     *
     * @return HorizontalPodAutoscalerListV2beta2|mixed
     */
    public function listForAllNamespacesAutoscalingV2beta2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2beta2/horizontalpodautoscalers"
        		,[
        		]
        	)
        	, 'listAutoscalingV2beta2HorizontalPodAutoscalerForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind HorizontalPodAutoscaler
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
     * @return HorizontalPodAutoscalerListV2beta2|mixed
     */
    public function listAutoscalingV2beta2($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2beta2/namespaces/{$namespace}/horizontalpodautoscalers"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAutoscalingV2beta2NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * create a HorizontalPodAutoscaler
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param TheHorizontalPodAutoscalerV2beta2 $Model
     * @param array $queries
     * @return TheHorizontalPodAutoscalerV2beta2|mixed
     */
    public function createAutoscalingV2beta2($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta2\HorizontalPodAutoscaler $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/autoscaling/v2beta2/namespaces/{$namespace}/horizontalpodautoscalers"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createAutoscalingV2beta2NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * delete collection of HorizontalPodAutoscaler
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
    public function deleteCollectionAutoscalingV2beta2($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/autoscaling/v2beta2/namespaces/{$namespace}/horizontalpodautoscalers"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAutoscalingV2beta2CollectionNamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * read the specified HorizontalPodAutoscaler
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheHorizontalPodAutoscalerV2beta2|mixed
     */
    public function readAutoscalingV2beta2($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2beta2/namespaces/{$namespace}/horizontalpodautoscalers/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAutoscalingV2beta2NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * replace the specified HorizontalPodAutoscaler
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param TheHorizontalPodAutoscalerV2beta2 $Model
     * @param array $queries
     * @return TheHorizontalPodAutoscalerV2beta2|mixed
     */
    public function replaceAutoscalingV2beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta2\HorizontalPodAutoscaler $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/autoscaling/v2beta2/namespaces/{$namespace}/horizontalpodautoscalers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAutoscalingV2beta2NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * delete a HorizontalPodAutoscaler
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
    public function deleteAutoscalingV2beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/autoscaling/v2beta2/namespaces/{$namespace}/horizontalpodautoscalers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAutoscalingV2beta2NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * partially update the specified HorizontalPodAutoscaler
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheHorizontalPodAutoscalerV2beta2|mixed
     */
    public function patchAutoscalingV2beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/autoscaling/v2beta2/namespaces/{$namespace}/horizontalpodautoscalers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAutoscalingV2beta2NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * read status of the specified HorizontalPodAutoscaler
     *
     * @param $namespace
     * @param $name
     * @return TheHorizontalPodAutoscalerV2beta2|mixed
     */
    public function readStatusAutoscalingV2beta2($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2beta2/namespaces/{$namespace}/horizontalpodautoscalers/{$name}/status"
        		,[
        		]
        	)
        	, 'readAutoscalingV2beta2NamespacedHorizontalPodAutoscalerStatus'
        );
    }

    /**
     * replace status of the specified HorizontalPodAutoscaler
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param TheHorizontalPodAutoscalerV2beta2 $Model
     * @param array $queries
     * @return TheHorizontalPodAutoscalerV2beta2|mixed
     */
    public function replaceStatusAutoscalingV2beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta2\HorizontalPodAutoscaler $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/autoscaling/v2beta2/namespaces/{$namespace}/horizontalpodautoscalers/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAutoscalingV2beta2NamespacedHorizontalPodAutoscalerStatus'
        );
    }

    /**
     * partially update status of the specified HorizontalPodAutoscaler
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheHorizontalPodAutoscalerV2beta2|mixed
     */
    public function patchStatusAutoscalingV2beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/autoscaling/v2beta2/namespaces/{$namespace}/horizontalpodautoscalers/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAutoscalingV2beta2NamespacedHorizontalPodAutoscalerStatus'
        );
    }

    /**
     * watch individual changes to a list of HorizontalPodAutoscaler. deprecated: use
     * the 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesAutoscalingV2beta2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2beta2/watch/horizontalpodautoscalers"
        		,[
        		]
        	)
        	, 'watchAutoscalingV2beta2HorizontalPodAutoscalerListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of HorizontalPodAutoscaler. deprecated: use
     * the 'watch' parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchListAutoscalingV2beta2($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2beta2/watch/namespaces/{$namespace}/horizontalpodautoscalers"
        		,[
        		]
        	)
        	, 'watchAutoscalingV2beta2NamespacedHorizontalPodAutoscalerList'
        );
    }

    /**
     * watch changes to an object of kind HorizontalPodAutoscaler. deprecated: use the
     * 'watch' parameter with a list operation instead, filtered to a single item with
     * the 'fieldSelector' parameter.
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchAutoscalingV2beta2($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2beta2/watch/namespaces/{$namespace}/horizontalpodautoscalers/{$name}"
        		,[
        		]
        	)
        	, 'watchAutoscalingV2beta2NamespacedHorizontalPodAutoscaler'
        );
    }


}


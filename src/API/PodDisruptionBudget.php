<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Policy\V1beta1\PodDisruptionBudgetList as PodDisruptionBudgetList;
use \Kubernetes\Model\Io\K8s\Api\Policy\V1beta1\PodDisruptionBudget as ThePodDisruptionBudget;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class PodDisruptionBudget extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind PodDisruptionBudget
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
     * @return PodDisruptionBudgetList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/policy/v1beta1/namespaces/{$namespace}/poddisruptionbudgets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listPolicyV1beta1NamespacedPodDisruptionBudget'
        );
    }

    /**
     * create a PodDisruptionBudget
     *
     * @param $namespace
     * @param ThePodDisruptionBudget $Model
     * @return ThePodDisruptionBudget|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Policy\V1beta1\PodDisruptionBudget $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/policy/v1beta1/namespaces/{$namespace}/poddisruptionbudgets"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createPolicyV1beta1NamespacedPodDisruptionBudget'
        );
    }

    /**
     * delete collection of PodDisruptionBudget
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
        		"/apis/policy/v1beta1/namespaces/{$namespace}/poddisruptionbudgets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deletePolicyV1beta1CollectionNamespacedPodDisruptionBudget'
        );
    }

    /**
     * read the specified PodDisruptionBudget
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return ThePodDisruptionBudget|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/policy/v1beta1/namespaces/{$namespace}/poddisruptionbudgets/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readPolicyV1beta1NamespacedPodDisruptionBudget'
        );
    }

    /**
     * replace the specified PodDisruptionBudget
     *
     * @param $namespace
     * @param $name
     * @param ThePodDisruptionBudget $Model
     * @return ThePodDisruptionBudget|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Policy\V1beta1\PodDisruptionBudget $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/policy/v1beta1/namespaces/{$namespace}/poddisruptionbudgets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replacePolicyV1beta1NamespacedPodDisruptionBudget'
        );
    }

    /**
     * delete a PodDisruptionBudget
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
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
        		"/apis/policy/v1beta1/namespaces/{$namespace}/poddisruptionbudgets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deletePolicyV1beta1NamespacedPodDisruptionBudget'
        );
    }

    /**
     * partially update the specified PodDisruptionBudget
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return ThePodDisruptionBudget|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/policy/v1beta1/namespaces/{$namespace}/poddisruptionbudgets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchPolicyV1beta1NamespacedPodDisruptionBudget'
        );
    }

    /**
     * read status of the specified PodDisruptionBudget
     *
     * @param $namespace
     * @param $name
     * @return ThePodDisruptionBudget|mixed
     */
    public function readStatus($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/policy/v1beta1/namespaces/{$namespace}/poddisruptionbudgets/{$name}/status"
        		,[
        		]
        	)
        	, 'readPolicyV1beta1NamespacedPodDisruptionBudgetStatus'
        );
    }

    /**
     * replace status of the specified PodDisruptionBudget
     *
     * @param $namespace
     * @param $name
     * @param ThePodDisruptionBudget $Model
     * @return ThePodDisruptionBudget|mixed
     */
    public function replaceStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Policy\V1beta1\PodDisruptionBudget $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/policy/v1beta1/namespaces/{$namespace}/poddisruptionbudgets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replacePolicyV1beta1NamespacedPodDisruptionBudgetStatus'
        );
    }

    /**
     * partially update status of the specified PodDisruptionBudget
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return ThePodDisruptionBudget|mixed
     */
    public function patchStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/policy/v1beta1/namespaces/{$namespace}/poddisruptionbudgets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchPolicyV1beta1NamespacedPodDisruptionBudgetStatus'
        );
    }

    /**
     * list or watch objects of kind PodDisruptionBudget
     *
     * @return PodDisruptionBudgetList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/policy/v1beta1/poddisruptionbudgets"
        		,[
        		]
        	)
        	, 'listPolicyV1beta1PodDisruptionBudgetForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of PodDisruptionBudget
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/policy/v1beta1/watch/namespaces/{$namespace}/poddisruptionbudgets"
        		,[
        		]
        	)
        	, 'watchPolicyV1beta1NamespacedPodDisruptionBudgetList'
        );
    }

    /**
     * watch changes to an object of kind PodDisruptionBudget
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/policy/v1beta1/watch/namespaces/{$namespace}/poddisruptionbudgets/{$name}"
        		,[
        		]
        	)
        	, 'watchPolicyV1beta1NamespacedPodDisruptionBudget'
        );
    }

    /**
     * watch individual changes to a list of PodDisruptionBudget
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/policy/v1beta1/watch/poddisruptionbudgets"
        		,[
        		]
        	)
        	, 'watchPolicyV1beta1PodDisruptionBudgetListForAllNamespaces'
        );
    }


}


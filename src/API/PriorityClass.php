<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Scheduling\V1alpha1\PriorityClassList as PriorityClassList;
use \Kubernetes\Model\Io\K8s\Api\Scheduling\V1alpha1\PriorityClass as ThePriorityClass;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class PriorityClass extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind PriorityClass
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
     * @param array $queries
     * @return PriorityClassList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/scheduling.k8s.io/v1alpha1/priorityclasses"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listSchedulingV1alpha1PriorityClass'
        );
    }

    /**
     * create a PriorityClass
     *
     * @param ThePriorityClass $Model
     * @return ThePriorityClass|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Scheduling\V1alpha1\PriorityClass $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/scheduling.k8s.io/v1alpha1/priorityclasses"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createSchedulingV1alpha1PriorityClass'
        );
    }

    /**
     * delete collection of PriorityClass
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
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/scheduling.k8s.io/v1alpha1/priorityclasses"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteSchedulingV1alpha1CollectionPriorityClass'
        );
    }

    /**
     * read the specified PriorityClass
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return ThePriorityClass|mixed
     */
    public function read($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/scheduling.k8s.io/v1alpha1/priorityclasses/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readSchedulingV1alpha1PriorityClass'
        );
    }

    /**
     * replace the specified PriorityClass
     *
     * @param $name
     * @param ThePriorityClass $Model
     * @return ThePriorityClass|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Scheduling\V1alpha1\PriorityClass $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/scheduling.k8s.io/v1alpha1/priorityclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceSchedulingV1alpha1PriorityClass'
        );
    }

    /**
     * delete a PriorityClass
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function delete($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/scheduling.k8s.io/v1alpha1/priorityclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteSchedulingV1alpha1PriorityClass'
        );
    }

    /**
     * partially update the specified PriorityClass
     *
     * @param $name
     * @param Patch $Model
     * @return ThePriorityClass|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/scheduling.k8s.io/v1alpha1/priorityclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchSchedulingV1alpha1PriorityClass'
        );
    }

    /**
     * watch individual changes to a list of PriorityClass
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/scheduling.k8s.io/v1alpha1/watch/priorityclasses"
        		,[
        		]
        	)
        	, 'watchSchedulingV1alpha1PriorityClassList'
        );
    }

    /**
     * watch changes to an object of kind PriorityClass
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/scheduling.k8s.io/v1alpha1/watch/priorityclasses/{$name}"
        		,[
        		]
        	)
        	, 'watchSchedulingV1alpha1PriorityClass'
        );
    }


}


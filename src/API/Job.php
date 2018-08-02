<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Batch\V1\JobList as JobList;
use \Kubernetes\Model\Io\K8s\Api\Batch\V1\Job as TheJob;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class Job extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind Job
     *
     * @return JobList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v1/jobs"
        		,[
        		]
        	)
        	, 'listBatchV1JobForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Job
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
     * @return JobList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v1/namespaces/{$namespace}/jobs"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listBatchV1NamespacedJob'
        );
    }

    /**
     * create a Job
     *
     * @param $namespace
     * @param TheJob $Model
     * @return TheJob|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Batch\V1\Job $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/batch/v1/namespaces/{$namespace}/jobs"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createBatchV1NamespacedJob'
        );
    }

    /**
     * delete collection of Job
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
        		"/apis/batch/v1/namespaces/{$namespace}/jobs"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteBatchV1CollectionNamespacedJob'
        );
    }

    /**
     * read the specified Job
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheJob|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v1/namespaces/{$namespace}/jobs/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readBatchV1NamespacedJob'
        );
    }

    /**
     * replace the specified Job
     *
     * @param $namespace
     * @param $name
     * @param TheJob $Model
     * @return TheJob|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Batch\V1\Job $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/batch/v1/namespaces/{$namespace}/jobs/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceBatchV1NamespacedJob'
        );
    }

    /**
     * delete a Job
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
        		"/apis/batch/v1/namespaces/{$namespace}/jobs/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteBatchV1NamespacedJob'
        );
    }

    /**
     * partially update the specified Job
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheJob|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/batch/v1/namespaces/{$namespace}/jobs/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchBatchV1NamespacedJob'
        );
    }

    /**
     * read status of the specified Job
     *
     * @param $namespace
     * @param $name
     * @return TheJob|mixed
     */
    public function readStatus($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v1/namespaces/{$namespace}/jobs/{$name}/status"
        		,[
        		]
        	)
        	, 'readBatchV1NamespacedJobStatus'
        );
    }

    /**
     * replace status of the specified Job
     *
     * @param $namespace
     * @param $name
     * @param TheJob $Model
     * @return TheJob|mixed
     */
    public function replaceStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Batch\V1\Job $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/batch/v1/namespaces/{$namespace}/jobs/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceBatchV1NamespacedJobStatus'
        );
    }

    /**
     * partially update status of the specified Job
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheJob|mixed
     */
    public function patchStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/batch/v1/namespaces/{$namespace}/jobs/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchBatchV1NamespacedJobStatus'
        );
    }

    /**
     * watch individual changes to a list of Job
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v1/watch/jobs"
        		,[
        		]
        	)
        	, 'watchBatchV1JobListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Job
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v1/watch/namespaces/{$namespace}/jobs"
        		,[
        		]
        	)
        	, 'watchBatchV1NamespacedJobList'
        );
    }

    /**
     * watch changes to an object of kind Job
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v1/watch/namespaces/{$namespace}/jobs/{$name}"
        		,[
        		]
        	)
        	, 'watchBatchV1NamespacedJob'
        );
    }


}


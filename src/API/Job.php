<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Batch\V1\JobList as JobList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Batch\V1\Job as Job;
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
     * @param string $namespace
     * @param array $queries
     * @return JobList|mixed
     */
    public function list(string $namespace = 'default', array $queries)
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
     * @param string $namespace
     * @param Job $Model
     * @return Job|mixed
     */
    public function create(string $namespace = 'default', \Job $Model)
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
     * @param string $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection(string $namespace = 'default', array $queries)
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
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return Job|mixed
     */
    public function read(string $namespace = 'default', $name, array $queries)
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
     * @param string $namespace
     * @param $name
     * @param Job $Model
     * @return Job|mixed
     */
    public function replace(string $namespace = 'default', $name, \Job $Model)
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
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Job|mixed
     */
    public function patch(string $namespace = 'default', $name, \Patch $Model)
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
     * @param string $namespace
     * @param $name
     * @return Job|mixed
     */
    public function readStatus(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @param Job $Model
     * @return Job|mixed
     */
    public function replaceStatus(string $namespace = 'default', $name, \Job $Model)
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
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Job|mixed
     */
    public function patchStatus(string $namespace = 'default', $name, \Patch $Model)
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
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchList(string $namespace = 'default')
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
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch(string $namespace = 'default', $name)
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


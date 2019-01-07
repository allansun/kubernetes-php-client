<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Batch\V1beta1\CronJobList as CronJobList;
use \Kubernetes\Model\Io\K8s\Api\Batch\V1beta1\CronJob as TheCronJob;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Batch\V2alpha1\CronJobList as CronJobListV2alpha1;
use \Kubernetes\Model\Io\K8s\Api\Batch\V2alpha1\CronJob as TheCronJobV2alpha1;

class CronJob extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind CronJob
     *
     * @return CronJobList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v1beta1/cronjobs"
        		,[
        		]
        	)
        	, 'listBatchV1beta1CronJobForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind CronJob
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
     * @return CronJobList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v1beta1/namespaces/{$namespace}/cronjobs"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listBatchV1beta1NamespacedCronJob'
        );
    }

    /**
     * create a CronJob
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param TheCronJob $Model
     * @param array $queries
     * @return TheCronJob|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Batch\V1beta1\CronJob $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/batch/v1beta1/namespaces/{$namespace}/cronjobs"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createBatchV1beta1NamespacedCronJob'
        );
    }

    /**
     * delete collection of CronJob
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
        		"/apis/batch/v1beta1/namespaces/{$namespace}/cronjobs"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteBatchV1beta1CollectionNamespacedCronJob'
        );
    }

    /**
     * read the specified CronJob
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheCronJob|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v1beta1/namespaces/{$namespace}/cronjobs/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readBatchV1beta1NamespacedCronJob'
        );
    }

    /**
     * replace the specified CronJob
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param TheCronJob $Model
     * @param array $queries
     * @return TheCronJob|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Batch\V1beta1\CronJob $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/batch/v1beta1/namespaces/{$namespace}/cronjobs/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceBatchV1beta1NamespacedCronJob'
        );
    }

    /**
     * delete a CronJob
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
        		"/apis/batch/v1beta1/namespaces/{$namespace}/cronjobs/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteBatchV1beta1NamespacedCronJob'
        );
    }

    /**
     * partially update the specified CronJob
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheCronJob|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/batch/v1beta1/namespaces/{$namespace}/cronjobs/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchBatchV1beta1NamespacedCronJob'
        );
    }

    /**
     * read status of the specified CronJob
     *
     * @param $namespace
     * @param $name
     * @return TheCronJob|mixed
     */
    public function readStatus($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v1beta1/namespaces/{$namespace}/cronjobs/{$name}/status"
        		,[
        		]
        	)
        	, 'readBatchV1beta1NamespacedCronJobStatus'
        );
    }

    /**
     * replace status of the specified CronJob
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param TheCronJob $Model
     * @param array $queries
     * @return TheCronJob|mixed
     */
    public function replaceStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Batch\V1beta1\CronJob $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/batch/v1beta1/namespaces/{$namespace}/cronjobs/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceBatchV1beta1NamespacedCronJobStatus'
        );
    }

    /**
     * partially update status of the specified CronJob
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheCronJob|mixed
     */
    public function patchStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/batch/v1beta1/namespaces/{$namespace}/cronjobs/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchBatchV1beta1NamespacedCronJobStatus'
        );
    }

    /**
     * watch individual changes to a list of CronJob. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v1beta1/watch/cronjobs"
        		,[
        		]
        	)
        	, 'watchBatchV1beta1CronJobListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of CronJob. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v1beta1/watch/namespaces/{$namespace}/cronjobs"
        		,[
        		]
        	)
        	, 'watchBatchV1beta1NamespacedCronJobList'
        );
    }

    /**
     * watch changes to an object of kind CronJob. deprecated: use the 'watch'
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
        		"/apis/batch/v1beta1/watch/namespaces/{$namespace}/cronjobs/{$name}"
        		,[
        		]
        	)
        	, 'watchBatchV1beta1NamespacedCronJob'
        );
    }

    /**
     * list or watch objects of kind CronJob
     *
     * @return CronJobListV2alpha1|mixed
     */
    public function listForAllNamespacesBatchV2alpha1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/cronjobs"
        		,[
        		]
        	)
        	, 'listBatchV2alpha1CronJobForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind CronJob
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
     * @return CronJobListV2alpha1|mixed
     */
    public function listBatchV2alpha1($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/cronjobs"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listBatchV2alpha1NamespacedCronJob'
        );
    }

    /**
     * create a CronJob
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param TheCronJobV2alpha1 $Model
     * @param array $queries
     * @return TheCronJobV2alpha1|mixed
     */
    public function createBatchV2alpha1($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Batch\V2alpha1\CronJob $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/cronjobs"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createBatchV2alpha1NamespacedCronJob'
        );
    }

    /**
     * delete collection of CronJob
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
    public function deleteCollectionBatchV2alpha1($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/cronjobs"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteBatchV2alpha1CollectionNamespacedCronJob'
        );
    }

    /**
     * read the specified CronJob
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheCronJobV2alpha1|mixed
     */
    public function readBatchV2alpha1($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/cronjobs/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readBatchV2alpha1NamespacedCronJob'
        );
    }

    /**
     * replace the specified CronJob
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param TheCronJobV2alpha1 $Model
     * @param array $queries
     * @return TheCronJobV2alpha1|mixed
     */
    public function replaceBatchV2alpha1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Batch\V2alpha1\CronJob $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/cronjobs/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceBatchV2alpha1NamespacedCronJob'
        );
    }

    /**
     * delete a CronJob
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
    public function deleteBatchV2alpha1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/cronjobs/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteBatchV2alpha1NamespacedCronJob'
        );
    }

    /**
     * partially update the specified CronJob
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheCronJobV2alpha1|mixed
     */
    public function patchBatchV2alpha1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/cronjobs/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchBatchV2alpha1NamespacedCronJob'
        );
    }

    /**
     * read status of the specified CronJob
     *
     * @param $namespace
     * @param $name
     * @return TheCronJobV2alpha1|mixed
     */
    public function readStatusBatchV2alpha1($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/cronjobs/{$name}/status"
        		,[
        		]
        	)
        	, 'readBatchV2alpha1NamespacedCronJobStatus'
        );
    }

    /**
     * replace status of the specified CronJob
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param TheCronJobV2alpha1 $Model
     * @param array $queries
     * @return TheCronJobV2alpha1|mixed
     */
    public function replaceStatusBatchV2alpha1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Batch\V2alpha1\CronJob $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/cronjobs/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceBatchV2alpha1NamespacedCronJobStatus'
        );
    }

    /**
     * partially update status of the specified CronJob
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheCronJobV2alpha1|mixed
     */
    public function patchStatusBatchV2alpha1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/cronjobs/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchBatchV2alpha1NamespacedCronJobStatus'
        );
    }

    /**
     * watch individual changes to a list of CronJob. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesBatchV2alpha1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/watch/cronjobs"
        		,[
        		]
        	)
        	, 'watchBatchV2alpha1CronJobListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of CronJob. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchListBatchV2alpha1($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/watch/namespaces/{$namespace}/cronjobs"
        		,[
        		]
        	)
        	, 'watchBatchV2alpha1NamespacedCronJobList'
        );
    }

    /**
     * watch changes to an object of kind CronJob. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchBatchV2alpha1($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/watch/namespaces/{$namespace}/cronjobs/{$name}"
        		,[
        		]
        	)
        	, 'watchBatchV2alpha1NamespacedCronJob'
        );
    }


}


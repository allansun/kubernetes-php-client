<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Storage\V1\StorageClassList as StorageClassList;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1\StorageClass as TheStorageClass;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1beta1\StorageClassList as StorageClassListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1beta1\StorageClass as TheStorageClassV1beta1;

class StorageClass extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind StorageClass
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
     * @return StorageClassList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1/storageclasses"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listStorageV1StorageClass'
        );
    }

    /**
     * create a StorageClass
     *
     * @param TheStorageClass $Model
     * @return TheStorageClass|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Storage\V1\StorageClass $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/storage.k8s.io/v1/storageclasses"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createStorageV1StorageClass'
        );
    }

    /**
     * delete collection of StorageClass
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
        		"/apis/storage.k8s.io/v1/storageclasses"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1CollectionStorageClass'
        );
    }

    /**
     * read the specified StorageClass
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheStorageClass|mixed
     */
    public function read($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1/storageclasses/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readStorageV1StorageClass'
        );
    }

    /**
     * replace the specified StorageClass
     *
     * @param $name
     * @param TheStorageClass $Model
     * @return TheStorageClass|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Storage\V1\StorageClass $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/storage.k8s.io/v1/storageclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceStorageV1StorageClass'
        );
    }

    /**
     * delete a StorageClass
     *
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey dryRun	string
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
        		"/apis/storage.k8s.io/v1/storageclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1StorageClass'
        );
    }

    /**
     * partially update the specified StorageClass
     *
     * @param $name
     * @param Patch $Model
     * @return TheStorageClass|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/storage.k8s.io/v1/storageclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchStorageV1StorageClass'
        );
    }

    /**
     * watch individual changes to a list of StorageClass. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1/watch/storageclasses"
        		,[
        		]
        	)
        	, 'watchStorageV1StorageClassList'
        );
    }

    /**
     * watch changes to an object of kind StorageClass. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1/watch/storageclasses/{$name}"
        		,[
        		]
        	)
        	, 'watchStorageV1StorageClass'
        );
    }

    /**
     * list or watch objects of kind StorageClass
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
     * @return StorageClassListV1beta1|mixed
     */
    public function listStorageV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1beta1/storageclasses"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listStorageV1beta1StorageClass'
        );
    }

    /**
     * create a StorageClass
     *
     * @param TheStorageClassV1beta1 $Model
     * @return TheStorageClassV1beta1|mixed
     */
    public function createStorageV1beta1(\Kubernetes\Model\Io\K8s\Api\Storage\V1beta1\StorageClass $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/storage.k8s.io/v1beta1/storageclasses"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createStorageV1beta1StorageClass'
        );
    }

    /**
     * delete collection of StorageClass
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
    public function deleteCollectionStorageV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/storage.k8s.io/v1beta1/storageclasses"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1beta1CollectionStorageClass'
        );
    }

    /**
     * read the specified StorageClass
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheStorageClassV1beta1|mixed
     */
    public function readStorageV1beta1($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1beta1/storageclasses/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readStorageV1beta1StorageClass'
        );
    }

    /**
     * replace the specified StorageClass
     *
     * @param $name
     * @param TheStorageClassV1beta1 $Model
     * @return TheStorageClassV1beta1|mixed
     */
    public function replaceStorageV1beta1($name, \Kubernetes\Model\Io\K8s\Api\Storage\V1beta1\StorageClass $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/storage.k8s.io/v1beta1/storageclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceStorageV1beta1StorageClass'
        );
    }

    /**
     * delete a StorageClass
     *
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteStorageV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/storage.k8s.io/v1beta1/storageclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1beta1StorageClass'
        );
    }

    /**
     * partially update the specified StorageClass
     *
     * @param $name
     * @param Patch $Model
     * @return TheStorageClassV1beta1|mixed
     */
    public function patchStorageV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/storage.k8s.io/v1beta1/storageclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchStorageV1beta1StorageClass'
        );
    }

    /**
     * watch individual changes to a list of StorageClass. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListStorageV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1beta1/watch/storageclasses"
        		,[
        		]
        	)
        	, 'watchStorageV1beta1StorageClassList'
        );
    }

    /**
     * watch changes to an object of kind StorageClass. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchStorageV1beta1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1beta1/watch/storageclasses/{$name}"
        		,[
        		]
        	)
        	, 'watchStorageV1beta1StorageClass'
        );
    }


}


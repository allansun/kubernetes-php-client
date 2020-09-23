<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Apiserverinternal\V1alpha1\StorageVersionList as StorageVersionList;
use \Kubernetes\Model\Io\K8s\Api\Apiserverinternal\V1alpha1\StorageVersion as TheStorageVersion;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class StorageVersion extends \KubernetesRuntime\AbstractAPI
{

    /**
     * list or watch objects of kind StorageVersion
     *
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey resourceVersionMatch	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey resourceVersionMatch	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return StorageVersionList|mixed
     */
    public function listInternalApiserverV1alpha1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/storageversions"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listInternalApiserverV1alpha1StorageVersion'
        );
    }

    /**
     * create a StorageVersion
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param TheStorageVersion $Model
     * @param array $queries
     * @return TheStorageVersion|mixed
     */
    public function createInternalApiserverV1alpha1(\Kubernetes\Model\Io\K8s\Api\Apiserverinternal\V1alpha1\StorageVersion $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/storageversions"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createInternalApiserverV1alpha1StorageVersion'
        );
    }

    /**
     * delete collection of StorageVersion
     *
     * @configkey continue	string
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey resourceVersionMatch	string
     * @configkey timeoutSeconds	integer
     * @configkey continue	string
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey resourceVersionMatch	string
     * @configkey timeoutSeconds	integer
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteInternalApiserverV1alpha1Collection(\Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/storageversions"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteInternalApiserverV1alpha1CollectionStorageVersion'
        );
    }

    /**
     * read the specified StorageVersion
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheStorageVersion|mixed
     */
    public function readInternalApiserverV1alpha1($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/storageversions/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readInternalApiserverV1alpha1StorageVersion'
        );
    }

    /**
     * replace the specified StorageVersion
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheStorageVersion $Model
     * @param array $queries
     * @return TheStorageVersion|mixed
     */
    public function replaceInternalApiserverV1alpha1($name, \Kubernetes\Model\Io\K8s\Api\Apiserverinternal\V1alpha1\StorageVersion $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/storageversions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceInternalApiserverV1alpha1StorageVersion'
        );
    }

    /**
     * delete a StorageVersion
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
    public function deleteInternalApiserverV1alpha1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/storageversions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteInternalApiserverV1alpha1StorageVersion'
        );
    }

    /**
     * partially update the specified StorageVersion
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheStorageVersion|mixed
     */
    public function patchInternalApiserverV1alpha1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/storageversions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchInternalApiserverV1alpha1StorageVersion'
        );
    }

    /**
     * read status of the specified StorageVersion
     *
     * @param $name
     * @return TheStorageVersion|mixed
     */
    public function readInternalApiserverV1alpha1Status($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/storageversions/{$name}/status"
        		,[
        		]
        	)
        	, 'readInternalApiserverV1alpha1StorageVersionStatus'
        );
    }

    /**
     * replace status of the specified StorageVersion
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheStorageVersion $Model
     * @param array $queries
     * @return TheStorageVersion|mixed
     */
    public function replaceInternalApiserverV1alpha1Status($name, \Kubernetes\Model\Io\K8s\Api\Apiserverinternal\V1alpha1\StorageVersion $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/storageversions/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceInternalApiserverV1alpha1StorageVersionStatus'
        );
    }

    /**
     * partially update status of the specified StorageVersion
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheStorageVersion|mixed
     */
    public function patchInternalApiserverV1alpha1Status($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/storageversions/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchInternalApiserverV1alpha1StorageVersionStatus'
        );
    }

    /**
     * watch individual changes to a list of StorageVersion. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchInternalApiserverV1alpha1List()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/watch/storageversions"
        		,[
        		]
        	)
        	, 'watchInternalApiserverV1alpha1StorageVersionList'
        );
    }

    /**
     * watch changes to an object of kind StorageVersion. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchInternalApiserverV1alpha1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/watch/storageversions/{$name}"
        		,[
        		]
        	)
        	, 'watchInternalApiserverV1alpha1StorageVersion'
        );
    }


}


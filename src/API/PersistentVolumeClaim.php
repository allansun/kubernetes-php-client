<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\PersistentVolumeClaim as PersistentVolumeClaim;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\PersistentVolumeClaimList as PersistentVolumeClaimList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class PersistentVolumeClaim extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind PersistentVolumeClaim
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
     * @return PersistentVolumeClaimList|mixed
     */
    public function list(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/persistentvolumeclaims"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listCoreV1NamespacedPersistentVolumeClaim'
        );
    }

    /**
     * create a PersistentVolumeClaim
     *
     * @param string $namespace
     * @param PersistentVolumeClaim $Model
     * @return PersistentVolumeClaim|mixed
     */
    public function create(string $namespace = 'default', \PersistentVolumeClaim $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/persistentvolumeclaims"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createCoreV1NamespacedPersistentVolumeClaim'
        );
    }

    /**
     * delete collection of PersistentVolumeClaim
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
        		"/api/v1/namespaces/{$namespace}/persistentvolumeclaims"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1CollectionNamespacedPersistentVolumeClaim'
        );
    }

    /**
     * read the specified PersistentVolumeClaim
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return PersistentVolumeClaim|mixed
     */
    public function read(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/persistentvolumeclaims/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readCoreV1NamespacedPersistentVolumeClaim'
        );
    }

    /**
     * replace the specified PersistentVolumeClaim
     *
     * @param string $namespace
     * @param $name
     * @param PersistentVolumeClaim $Model
     * @return PersistentVolumeClaim|mixed
     */
    public function replace(string $namespace = 'default', $name, \PersistentVolumeClaim $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/persistentvolumeclaims/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1NamespacedPersistentVolumeClaim'
        );
    }

    /**
     * delete a PersistentVolumeClaim
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
        		"/api/v1/namespaces/{$namespace}/persistentvolumeclaims/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1NamespacedPersistentVolumeClaim'
        );
    }

    /**
     * partially update the specified PersistentVolumeClaim
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return PersistentVolumeClaim|mixed
     */
    public function patch(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/persistentvolumeclaims/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchCoreV1NamespacedPersistentVolumeClaim'
        );
    }

    /**
     * read status of the specified PersistentVolumeClaim
     *
     * @param string $namespace
     * @param $name
     * @return PersistentVolumeClaim|mixed
     */
    public function readStatus(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/persistentvolumeclaims/{$name}/status"
        		,[
        		]
        	)
        	, 'readCoreV1NamespacedPersistentVolumeClaimStatus'
        );
    }

    /**
     * replace status of the specified PersistentVolumeClaim
     *
     * @param string $namespace
     * @param $name
     * @param PersistentVolumeClaim $Model
     * @return PersistentVolumeClaim|mixed
     */
    public function replaceStatus(string $namespace = 'default', $name, \PersistentVolumeClaim $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/persistentvolumeclaims/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1NamespacedPersistentVolumeClaimStatus'
        );
    }

    /**
     * partially update status of the specified PersistentVolumeClaim
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return PersistentVolumeClaim|mixed
     */
    public function patchStatus(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/persistentvolumeclaims/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchCoreV1NamespacedPersistentVolumeClaimStatus'
        );
    }

    /**
     * list or watch objects of kind PersistentVolumeClaim
     *
     * @return PersistentVolumeClaimList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/persistentvolumeclaims"
        		,[
        		]
        	)
        	, 'listCoreV1PersistentVolumeClaimForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of PersistentVolumeClaim
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchList(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/persistentvolumeclaims"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedPersistentVolumeClaimList'
        );
    }

    /**
     * watch changes to an object of kind PersistentVolumeClaim
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/persistentvolumeclaims/{$name}"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedPersistentVolumeClaim'
        );
    }

    /**
     * watch individual changes to a list of PersistentVolumeClaim
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/persistentvolumeclaims"
        		,[
        		]
        	)
        	, 'watchCoreV1PersistentVolumeClaimListForAllNamespaces'
        );
    }


}


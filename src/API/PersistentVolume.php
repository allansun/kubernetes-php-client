<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Core\V1\PersistentVolumeList as PersistentVolumeList;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\PersistentVolume as ThePersistentVolume;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class PersistentVolume extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind PersistentVolume
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
     * @return PersistentVolumeList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/persistentvolumes"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listCoreV1PersistentVolume'
        );
    }

    /**
     * create a PersistentVolume
     *
     * @param ThePersistentVolume $Model
     * @return ThePersistentVolume|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Core\V1\PersistentVolume $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/persistentvolumes"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createCoreV1PersistentVolume'
        );
    }

    /**
     * delete collection of PersistentVolume
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
        		"/api/v1/persistentvolumes"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1CollectionPersistentVolume'
        );
    }

    /**
     * read the specified PersistentVolume
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return ThePersistentVolume|mixed
     */
    public function read($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/persistentvolumes/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readCoreV1PersistentVolume'
        );
    }

    /**
     * replace the specified PersistentVolume
     *
     * @param $name
     * @param ThePersistentVolume $Model
     * @return ThePersistentVolume|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Core\V1\PersistentVolume $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/persistentvolumes/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1PersistentVolume'
        );
    }

    /**
     * delete a PersistentVolume
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
        		"/api/v1/persistentvolumes/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1PersistentVolume'
        );
    }

    /**
     * partially update the specified PersistentVolume
     *
     * @param $name
     * @param Patch $Model
     * @return ThePersistentVolume|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/persistentvolumes/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchCoreV1PersistentVolume'
        );
    }

    /**
     * read status of the specified PersistentVolume
     *
     * @param $name
     * @return ThePersistentVolume|mixed
     */
    public function readStatus($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/persistentvolumes/{$name}/status"
        		,[
        		]
        	)
        	, 'readCoreV1PersistentVolumeStatus'
        );
    }

    /**
     * replace status of the specified PersistentVolume
     *
     * @param $name
     * @param ThePersistentVolume $Model
     * @return ThePersistentVolume|mixed
     */
    public function replaceStatus($name, \Kubernetes\Model\Io\K8s\Api\Core\V1\PersistentVolume $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/persistentvolumes/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1PersistentVolumeStatus'
        );
    }

    /**
     * partially update status of the specified PersistentVolume
     *
     * @param $name
     * @param Patch $Model
     * @return ThePersistentVolume|mixed
     */
    public function patchStatus($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/persistentvolumes/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchCoreV1PersistentVolumeStatus'
        );
    }

    /**
     * watch individual changes to a list of PersistentVolume
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/persistentvolumes"
        		,[
        		]
        	)
        	, 'watchCoreV1PersistentVolumeList'
        );
    }

    /**
     * watch changes to an object of kind PersistentVolume
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/persistentvolumes/{$name}"
        		,[
        		]
        	)
        	, 'watchCoreV1PersistentVolume'
        );
    }


}


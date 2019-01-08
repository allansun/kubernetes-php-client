<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Storage\V1\VolumeAttachmentList as VolumeAttachmentList;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1\VolumeAttachment as TheVolumeAttachment;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1alpha1\VolumeAttachmentList as VolumeAttachmentListV1alpha1;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1alpha1\VolumeAttachment as TheVolumeAttachmentV1alpha1;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1beta1\VolumeAttachmentList as VolumeAttachmentListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1beta1\VolumeAttachment as TheVolumeAttachmentV1beta1;

class VolumeAttachment extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind VolumeAttachment
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
     * @param array $queries
     * @return VolumeAttachmentList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1/volumeattachments"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listStorageV1VolumeAttachment'
        );
    }

    /**
     * create a VolumeAttachment
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param TheVolumeAttachment $Model
     * @param array $queries
     * @return TheVolumeAttachment|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Storage\V1\VolumeAttachment $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/storage.k8s.io/v1/volumeattachments"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createStorageV1VolumeAttachment'
        );
    }

    /**
     * delete collection of VolumeAttachment
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
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/storage.k8s.io/v1/volumeattachments"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1CollectionVolumeAttachment'
        );
    }

    /**
     * read the specified VolumeAttachment
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheVolumeAttachment|mixed
     */
    public function read($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1/volumeattachments/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readStorageV1VolumeAttachment'
        );
    }

    /**
     * replace the specified VolumeAttachment
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $name
     * @param TheVolumeAttachment $Model
     * @param array $queries
     * @return TheVolumeAttachment|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Storage\V1\VolumeAttachment $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/storage.k8s.io/v1/volumeattachments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceStorageV1VolumeAttachment'
        );
    }

    /**
     * delete a VolumeAttachment
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
        		"/apis/storage.k8s.io/v1/volumeattachments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1VolumeAttachment'
        );
    }

    /**
     * partially update the specified VolumeAttachment
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheVolumeAttachment|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/storage.k8s.io/v1/volumeattachments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchStorageV1VolumeAttachment'
        );
    }

    /**
     * read status of the specified VolumeAttachment
     *
     * @param $name
     * @return TheVolumeAttachment|mixed
     */
    public function readStatus($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1/volumeattachments/{$name}/status"
        		,[
        		]
        	)
        	, 'readStorageV1VolumeAttachmentStatus'
        );
    }

    /**
     * replace status of the specified VolumeAttachment
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $name
     * @param TheVolumeAttachment $Model
     * @param array $queries
     * @return TheVolumeAttachment|mixed
     */
    public function replaceStatus($name, \Kubernetes\Model\Io\K8s\Api\Storage\V1\VolumeAttachment $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/storage.k8s.io/v1/volumeattachments/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceStorageV1VolumeAttachmentStatus'
        );
    }

    /**
     * partially update status of the specified VolumeAttachment
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheVolumeAttachment|mixed
     */
    public function patchStatus($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/storage.k8s.io/v1/volumeattachments/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchStorageV1VolumeAttachmentStatus'
        );
    }

    /**
     * watch individual changes to a list of VolumeAttachment. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1/watch/volumeattachments"
        		,[
        		]
        	)
        	, 'watchStorageV1VolumeAttachmentList'
        );
    }

    /**
     * watch changes to an object of kind VolumeAttachment. deprecated: use the 'watch'
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
        		"/apis/storage.k8s.io/v1/watch/volumeattachments/{$name}"
        		,[
        		]
        	)
        	, 'watchStorageV1VolumeAttachment'
        );
    }

    /**
     * list or watch objects of kind VolumeAttachment
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
     * @param array $queries
     * @return VolumeAttachmentListV1alpha1|mixed
     */
    public function listStorageV1alpha1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1alpha1/volumeattachments"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listStorageV1alpha1VolumeAttachment'
        );
    }

    /**
     * create a VolumeAttachment
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param TheVolumeAttachmentV1alpha1 $Model
     * @param array $queries
     * @return TheVolumeAttachmentV1alpha1|mixed
     */
    public function createStorageV1alpha1(\Kubernetes\Model\Io\K8s\Api\Storage\V1alpha1\VolumeAttachment $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/storage.k8s.io/v1alpha1/volumeattachments"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createStorageV1alpha1VolumeAttachment'
        );
    }

    /**
     * delete collection of VolumeAttachment
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
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollectionStorageV1alpha1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/storage.k8s.io/v1alpha1/volumeattachments"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1alpha1CollectionVolumeAttachment'
        );
    }

    /**
     * read the specified VolumeAttachment
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheVolumeAttachmentV1alpha1|mixed
     */
    public function readStorageV1alpha1($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1alpha1/volumeattachments/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readStorageV1alpha1VolumeAttachment'
        );
    }

    /**
     * replace the specified VolumeAttachment
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $name
     * @param TheVolumeAttachmentV1alpha1 $Model
     * @param array $queries
     * @return TheVolumeAttachmentV1alpha1|mixed
     */
    public function replaceStorageV1alpha1($name, \Kubernetes\Model\Io\K8s\Api\Storage\V1alpha1\VolumeAttachment $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/storage.k8s.io/v1alpha1/volumeattachments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceStorageV1alpha1VolumeAttachment'
        );
    }

    /**
     * delete a VolumeAttachment
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
    public function deleteStorageV1alpha1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/storage.k8s.io/v1alpha1/volumeattachments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1alpha1VolumeAttachment'
        );
    }

    /**
     * partially update the specified VolumeAttachment
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheVolumeAttachmentV1alpha1|mixed
     */
    public function patchStorageV1alpha1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/storage.k8s.io/v1alpha1/volumeattachments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchStorageV1alpha1VolumeAttachment'
        );
    }

    /**
     * watch individual changes to a list of VolumeAttachment. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListStorageV1alpha1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1alpha1/watch/volumeattachments"
        		,[
        		]
        	)
        	, 'watchStorageV1alpha1VolumeAttachmentList'
        );
    }

    /**
     * watch changes to an object of kind VolumeAttachment. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchStorageV1alpha1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1alpha1/watch/volumeattachments/{$name}"
        		,[
        		]
        	)
        	, 'watchStorageV1alpha1VolumeAttachment'
        );
    }

    /**
     * list or watch objects of kind VolumeAttachment
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
     * @param array $queries
     * @return VolumeAttachmentListV1beta1|mixed
     */
    public function listStorageV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1beta1/volumeattachments"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listStorageV1beta1VolumeAttachment'
        );
    }

    /**
     * create a VolumeAttachment
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param TheVolumeAttachmentV1beta1 $Model
     * @param array $queries
     * @return TheVolumeAttachmentV1beta1|mixed
     */
    public function createStorageV1beta1(\Kubernetes\Model\Io\K8s\Api\Storage\V1beta1\VolumeAttachment $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/storage.k8s.io/v1beta1/volumeattachments"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createStorageV1beta1VolumeAttachment'
        );
    }

    /**
     * delete collection of VolumeAttachment
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
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollectionStorageV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/storage.k8s.io/v1beta1/volumeattachments"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1beta1CollectionVolumeAttachment'
        );
    }

    /**
     * read the specified VolumeAttachment
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheVolumeAttachmentV1beta1|mixed
     */
    public function readStorageV1beta1($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1beta1/volumeattachments/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readStorageV1beta1VolumeAttachment'
        );
    }

    /**
     * replace the specified VolumeAttachment
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $name
     * @param TheVolumeAttachmentV1beta1 $Model
     * @param array $queries
     * @return TheVolumeAttachmentV1beta1|mixed
     */
    public function replaceStorageV1beta1($name, \Kubernetes\Model\Io\K8s\Api\Storage\V1beta1\VolumeAttachment $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/storage.k8s.io/v1beta1/volumeattachments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceStorageV1beta1VolumeAttachment'
        );
    }

    /**
     * delete a VolumeAttachment
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
        		"/apis/storage.k8s.io/v1beta1/volumeattachments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1beta1VolumeAttachment'
        );
    }

    /**
     * partially update the specified VolumeAttachment
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheVolumeAttachmentV1beta1|mixed
     */
    public function patchStorageV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/storage.k8s.io/v1beta1/volumeattachments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchStorageV1beta1VolumeAttachment'
        );
    }

    /**
     * watch individual changes to a list of VolumeAttachment. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListStorageV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1beta1/watch/volumeattachments"
        		,[
        		]
        	)
        	, 'watchStorageV1beta1VolumeAttachmentList'
        );
    }

    /**
     * watch changes to an object of kind VolumeAttachment. deprecated: use the 'watch'
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
        		"/apis/storage.k8s.io/v1beta1/watch/volumeattachments/{$name}"
        		,[
        		]
        	)
        	, 'watchStorageV1beta1VolumeAttachment'
        );
    }


}


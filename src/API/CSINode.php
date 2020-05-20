<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Storage\V1\CSINodeList as CSINodeList;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1\CSINode as TheCSINode;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1beta1\CSINodeList as CSINodeListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1beta1\CSINode as TheCSINodeV1beta1;

class CSINode extends \KubernetesRuntime\AbstractAPI
{

    /**
     * list or watch objects of kind CSINode
     *
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return CSINodeList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1/csinodes"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listStorageV1CSINode'
        );
    }

    /**
     * create a CSINode
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param TheCSINode $Model
     * @param array $queries
     * @return TheCSINode|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Storage\V1\CSINode $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/storage.k8s.io/v1/csinodes"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createStorageV1CSINode'
        );
    }

    /**
     * delete collection of CSINode
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
     * @configkey timeoutSeconds	integer
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection(\Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/storage.k8s.io/v1/csinodes"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1CollectionCSINode'
        );
    }

    /**
     * read the specified CSINode
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheCSINode|mixed
     */
    public function read($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1/csinodes/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readStorageV1CSINode'
        );
    }

    /**
     * replace the specified CSINode
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheCSINode $Model
     * @param array $queries
     * @return TheCSINode|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Storage\V1\CSINode $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/storage.k8s.io/v1/csinodes/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceStorageV1CSINode'
        );
    }

    /**
     * delete a CSINode
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
     * @return TheCSINode|mixed
     */
    public function delete($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/storage.k8s.io/v1/csinodes/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1CSINode'
        );
    }

    /**
     * partially update the specified CSINode
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
     * @return TheCSINode|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/storage.k8s.io/v1/csinodes/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchStorageV1CSINode'
        );
    }

    /**
     * watch individual changes to a list of CSINode. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1/watch/csinodes"
        		,[
        		]
        	)
        	, 'watchStorageV1CSINodeList'
        );
    }

    /**
     * watch changes to an object of kind CSINode. deprecated: use the 'watch'
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
        		"/apis/storage.k8s.io/v1/watch/csinodes/{$name}"
        		,[
        		]
        	)
        	, 'watchStorageV1CSINode'
        );
    }

    /**
     * list or watch objects of kind CSINode
     *
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return CSINodeListV1beta1|mixed
     */
    public function listStorageV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1beta1/csinodes"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listStorageV1beta1CSINode'
        );
    }

    /**
     * create a CSINode
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param TheCSINodeV1beta1 $Model
     * @param array $queries
     * @return TheCSINodeV1beta1|mixed
     */
    public function createStorageV1beta1(\Kubernetes\Model\Io\K8s\Api\Storage\V1beta1\CSINode $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/storage.k8s.io/v1beta1/csinodes"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createStorageV1beta1CSINode'
        );
    }

    /**
     * delete collection of CSINode
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
     * @configkey timeoutSeconds	integer
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollectionStorageV1beta1(\Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/storage.k8s.io/v1beta1/csinodes"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1beta1CollectionCSINode'
        );
    }

    /**
     * read the specified CSINode
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheCSINodeV1beta1|mixed
     */
    public function readStorageV1beta1($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1beta1/csinodes/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readStorageV1beta1CSINode'
        );
    }

    /**
     * replace the specified CSINode
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheCSINodeV1beta1 $Model
     * @param array $queries
     * @return TheCSINodeV1beta1|mixed
     */
    public function replaceStorageV1beta1($name, \Kubernetes\Model\Io\K8s\Api\Storage\V1beta1\CSINode $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/storage.k8s.io/v1beta1/csinodes/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceStorageV1beta1CSINode'
        );
    }

    /**
     * delete a CSINode
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
     * @return TheCSINodeV1beta1|mixed
     */
    public function deleteStorageV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/storage.k8s.io/v1beta1/csinodes/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1beta1CSINode'
        );
    }

    /**
     * partially update the specified CSINode
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
     * @return TheCSINodeV1beta1|mixed
     */
    public function patchStorageV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/storage.k8s.io/v1beta1/csinodes/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchStorageV1beta1CSINode'
        );
    }

    /**
     * watch individual changes to a list of CSINode. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListStorageV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1beta1/watch/csinodes"
        		,[
        		]
        	)
        	, 'watchStorageV1beta1CSINodeList'
        );
    }

    /**
     * watch changes to an object of kind CSINode. deprecated: use the 'watch'
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
        		"/apis/storage.k8s.io/v1beta1/watch/csinodes/{$name}"
        		,[
        		]
        	)
        	, 'watchStorageV1beta1CSINode'
        );
    }


}


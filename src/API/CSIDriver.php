<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Storage\V1\CSIDriverList as CSIDriverList;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1\CSIDriver as TheCSIDriver;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1beta1\CSIDriverList as CSIDriverListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1beta1\CSIDriver as TheCSIDriverV1beta1;

class CSIDriver extends \KubernetesRuntime\AbstractAPI
{

    /**
     * list or watch objects of kind CSIDriver
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
     * @return CSIDriverList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1/csidrivers"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listStorageV1CSIDriver'
        );
    }

    /**
     * create a CSIDriver
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param TheCSIDriver $Model
     * @param array $queries
     * @return TheCSIDriver|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Storage\V1\CSIDriver $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/storage.k8s.io/v1/csidrivers"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createStorageV1CSIDriver'
        );
    }

    /**
     * delete collection of CSIDriver
     *
     * @configkey allowWatchBookmarks	boolean
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
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
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
     * @configkey watch	boolean
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection(\Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/storage.k8s.io/v1/csidrivers"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1CollectionCSIDriver'
        );
    }

    /**
     * read the specified CSIDriver
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheCSIDriver|mixed
     */
    public function read($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1/csidrivers/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readStorageV1CSIDriver'
        );
    }

    /**
     * replace the specified CSIDriver
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheCSIDriver $Model
     * @param array $queries
     * @return TheCSIDriver|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Storage\V1\CSIDriver $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/storage.k8s.io/v1/csidrivers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceStorageV1CSIDriver'
        );
    }

    /**
     * delete a CSIDriver
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
     * @return TheCSIDriver|mixed
     */
    public function delete($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/storage.k8s.io/v1/csidrivers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1CSIDriver'
        );
    }

    /**
     * partially update the specified CSIDriver
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
     * @return TheCSIDriver|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/storage.k8s.io/v1/csidrivers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchStorageV1CSIDriver'
        );
    }

    /**
     * watch individual changes to a list of CSIDriver. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1/watch/csidrivers"
        		,[
        		]
        	)
        	, 'watchStorageV1CSIDriverList'
        );
    }

    /**
     * watch changes to an object of kind CSIDriver. deprecated: use the 'watch'
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
        		"/apis/storage.k8s.io/v1/watch/csidrivers/{$name}"
        		,[
        		]
        	)
        	, 'watchStorageV1CSIDriver'
        );
    }

    /**
     * list or watch objects of kind CSIDriver
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
     * @return CSIDriverListV1beta1|mixed
     */
    public function listStorageV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1beta1/csidrivers"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listStorageV1beta1CSIDriver'
        );
    }

    /**
     * create a CSIDriver
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param TheCSIDriverV1beta1 $Model
     * @param array $queries
     * @return TheCSIDriverV1beta1|mixed
     */
    public function createStorageV1beta1(\Kubernetes\Model\Io\K8s\Api\Storage\V1beta1\CSIDriver $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/storage.k8s.io/v1beta1/csidrivers"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createStorageV1beta1CSIDriver'
        );
    }

    /**
     * delete collection of CSIDriver
     *
     * @configkey allowWatchBookmarks	boolean
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
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
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
     * @configkey watch	boolean
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollectionStorageV1beta1(\Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/storage.k8s.io/v1beta1/csidrivers"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1beta1CollectionCSIDriver'
        );
    }

    /**
     * read the specified CSIDriver
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheCSIDriverV1beta1|mixed
     */
    public function readStorageV1beta1($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1beta1/csidrivers/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readStorageV1beta1CSIDriver'
        );
    }

    /**
     * replace the specified CSIDriver
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheCSIDriverV1beta1 $Model
     * @param array $queries
     * @return TheCSIDriverV1beta1|mixed
     */
    public function replaceStorageV1beta1($name, \Kubernetes\Model\Io\K8s\Api\Storage\V1beta1\CSIDriver $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/storage.k8s.io/v1beta1/csidrivers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceStorageV1beta1CSIDriver'
        );
    }

    /**
     * delete a CSIDriver
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
     * @return TheCSIDriverV1beta1|mixed
     */
    public function deleteStorageV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/storage.k8s.io/v1beta1/csidrivers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1beta1CSIDriver'
        );
    }

    /**
     * partially update the specified CSIDriver
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
     * @return TheCSIDriverV1beta1|mixed
     */
    public function patchStorageV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/storage.k8s.io/v1beta1/csidrivers/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchStorageV1beta1CSIDriver'
        );
    }

    /**
     * watch individual changes to a list of CSIDriver. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListStorageV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1beta1/watch/csidrivers"
        		,[
        		]
        	)
        	, 'watchStorageV1beta1CSIDriverList'
        );
    }

    /**
     * watch changes to an object of kind CSIDriver. deprecated: use the 'watch'
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
        		"/apis/storage.k8s.io/v1beta1/watch/csidrivers/{$name}"
        		,[
        		]
        	)
        	, 'watchStorageV1beta1CSIDriver'
        );
    }


}


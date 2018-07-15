<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\ResourceQuota as ResourceQuota;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\ResourceQuotaList as ResourceQuotaList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class ResourceQuota extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind ResourceQuota
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
     * @return ResourceQuotaList|mixed
     */
    public function list(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/resourcequotas"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listCoreV1NamespacedResourceQuota'
        );
    }

    /**
     * create a ResourceQuota
     *
     * @param string $namespace
     * @param ResourceQuota $Model
     * @return ResourceQuota|mixed
     */
    public function create(string $namespace = 'default', \ResourceQuota $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/resourcequotas"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createCoreV1NamespacedResourceQuota'
        );
    }

    /**
     * delete collection of ResourceQuota
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
        		"/api/v1/namespaces/{$namespace}/resourcequotas"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1CollectionNamespacedResourceQuota'
        );
    }

    /**
     * read the specified ResourceQuota
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return ResourceQuota|mixed
     */
    public function read(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/resourcequotas/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readCoreV1NamespacedResourceQuota'
        );
    }

    /**
     * replace the specified ResourceQuota
     *
     * @param string $namespace
     * @param $name
     * @param ResourceQuota $Model
     * @return ResourceQuota|mixed
     */
    public function replace(string $namespace = 'default', $name, \ResourceQuota $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/resourcequotas/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1NamespacedResourceQuota'
        );
    }

    /**
     * delete a ResourceQuota
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
        		"/api/v1/namespaces/{$namespace}/resourcequotas/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1NamespacedResourceQuota'
        );
    }

    /**
     * partially update the specified ResourceQuota
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return ResourceQuota|mixed
     */
    public function patch(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/resourcequotas/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchCoreV1NamespacedResourceQuota'
        );
    }

    /**
     * read status of the specified ResourceQuota
     *
     * @param string $namespace
     * @param $name
     * @return ResourceQuota|mixed
     */
    public function readStatus(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/resourcequotas/{$name}/status"
        		,[
        		]
        	)
        	, 'readCoreV1NamespacedResourceQuotaStatus'
        );
    }

    /**
     * replace status of the specified ResourceQuota
     *
     * @param string $namespace
     * @param $name
     * @param ResourceQuota $Model
     * @return ResourceQuota|mixed
     */
    public function replaceStatus(string $namespace = 'default', $name, \ResourceQuota $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/resourcequotas/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1NamespacedResourceQuotaStatus'
        );
    }

    /**
     * partially update status of the specified ResourceQuota
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return ResourceQuota|mixed
     */
    public function patchStatus(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/resourcequotas/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchCoreV1NamespacedResourceQuotaStatus'
        );
    }

    /**
     * list or watch objects of kind ResourceQuota
     *
     * @return ResourceQuotaList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/resourcequotas"
        		,[
        		]
        	)
        	, 'listCoreV1ResourceQuotaForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of ResourceQuota
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchList(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/resourcequotas"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedResourceQuotaList'
        );
    }

    /**
     * watch changes to an object of kind ResourceQuota
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/resourcequotas/{$name}"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedResourceQuota'
        );
    }

    /**
     * watch individual changes to a list of ResourceQuota
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/resourcequotas"
        		,[
        		]
        	)
        	, 'watchCoreV1ResourceQuotaListForAllNamespaces'
        );
    }


}


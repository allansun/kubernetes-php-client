<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Core\V1\ServiceList as ServiceList;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\Service as TheService;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class Service extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind Service
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
     * @return ServiceList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/services"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listCoreV1NamespacedService'
        );
    }

    /**
     * create a Service
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param TheService $Model
     * @param array $queries
     * @return TheService|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Core\V1\Service $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/services"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createCoreV1NamespacedService'
        );
    }

    /**
     * read the specified Service
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheService|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/services/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readCoreV1NamespacedService'
        );
    }

    /**
     * replace the specified Service
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param TheService $Model
     * @param array $queries
     * @return TheService|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Core\V1\Service $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/services/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceCoreV1NamespacedService'
        );
    }

    /**
     * delete a Service
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
        		"/api/v1/namespaces/{$namespace}/services/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1NamespacedService'
        );
    }

    /**
     * partially update the specified Service
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheService|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/services/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchCoreV1NamespacedService'
        );
    }

    /**
     * read status of the specified Service
     *
     * @param $namespace
     * @param $name
     * @return TheService|mixed
     */
    public function readStatus($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/status"
        		,[
        		]
        	)
        	, 'readCoreV1NamespacedServiceStatus'
        );
    }

    /**
     * replace status of the specified Service
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param TheService $Model
     * @param array $queries
     * @return TheService|mixed
     */
    public function replaceStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Core\V1\Service $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceCoreV1NamespacedServiceStatus'
        );
    }

    /**
     * partially update status of the specified Service
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheService|mixed
     */
    public function patchStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchCoreV1NamespacedServiceStatus'
        );
    }

    /**
     * list or watch objects of kind Service
     *
     * @return ServiceList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/services"
        		,[
        		]
        	)
        	, 'listCoreV1ServiceForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Service. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/services"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedServiceList'
        );
    }

    /**
     * watch changes to an object of kind Service. deprecated: use the 'watch'
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
        		"/api/v1/watch/namespaces/{$namespace}/services/{$name}"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedService'
        );
    }

    /**
     * watch individual changes to a list of Service. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/services"
        		,[
        		]
        	)
        	, 'watchCoreV1ServiceListForAllNamespaces'
        );
    }


}


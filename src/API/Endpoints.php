<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Core\V1\EndpointsList as EndpointsList;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\Endpoints as TheEndpoints;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class Endpoints extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind Endpoints
     *
     * @return EndpointsList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/endpoints"
        		,[
        		]
        	)
        	, 'listCoreV1EndpointsForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Endpoints
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
     * @return EndpointsList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/endpoints"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listCoreV1NamespacedEndpoints'
        );
    }

    /**
     * create Endpoints
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param TheEndpoints $Model
     * @param array $queries
     * @return TheEndpoints|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Core\V1\Endpoints $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/endpoints"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createCoreV1NamespacedEndpoints'
        );
    }

    /**
     * delete collection of Endpoints
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
        		"/api/v1/namespaces/{$namespace}/endpoints"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1CollectionNamespacedEndpoints'
        );
    }

    /**
     * read the specified Endpoints
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheEndpoints|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/endpoints/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readCoreV1NamespacedEndpoints'
        );
    }

    /**
     * replace the specified Endpoints
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param TheEndpoints $Model
     * @param array $queries
     * @return TheEndpoints|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Core\V1\Endpoints $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/endpoints/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceCoreV1NamespacedEndpoints'
        );
    }

    /**
     * delete Endpoints
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
        		"/api/v1/namespaces/{$namespace}/endpoints/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1NamespacedEndpoints'
        );
    }

    /**
     * partially update the specified Endpoints
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheEndpoints|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/endpoints/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchCoreV1NamespacedEndpoints'
        );
    }

    /**
     * watch individual changes to a list of Endpoints. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/endpoints"
        		,[
        		]
        	)
        	, 'watchCoreV1EndpointsListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Endpoints. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/endpoints"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedEndpointsList'
        );
    }

    /**
     * watch changes to an object of kind Endpoints. deprecated: use the 'watch'
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
        		"/api/v1/watch/namespaces/{$namespace}/endpoints/{$name}"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedEndpoints'
        );
    }


}


<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\ServiceAccount as ServiceAccount;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\ServiceAccountList as ServiceAccountList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class ServiceAccount extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind ServiceAccount
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
     * @return ServiceAccountList|mixed
     */
    public function list(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/serviceaccounts"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listCoreV1NamespacedServiceAccount'
        );
    }

    /**
     * create a ServiceAccount
     *
     * @param string $namespace
     * @param ServiceAccount $Model
     * @return ServiceAccount|mixed
     */
    public function create(string $namespace = 'default', \ServiceAccount $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/serviceaccounts"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createCoreV1NamespacedServiceAccount'
        );
    }

    /**
     * delete collection of ServiceAccount
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
        		"/api/v1/namespaces/{$namespace}/serviceaccounts"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1CollectionNamespacedServiceAccount'
        );
    }

    /**
     * read the specified ServiceAccount
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return ServiceAccount|mixed
     */
    public function read(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/serviceaccounts/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readCoreV1NamespacedServiceAccount'
        );
    }

    /**
     * replace the specified ServiceAccount
     *
     * @param string $namespace
     * @param $name
     * @param ServiceAccount $Model
     * @return ServiceAccount|mixed
     */
    public function replace(string $namespace = 'default', $name, \ServiceAccount $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/serviceaccounts/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1NamespacedServiceAccount'
        );
    }

    /**
     * delete a ServiceAccount
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
        		"/api/v1/namespaces/{$namespace}/serviceaccounts/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1NamespacedServiceAccount'
        );
    }

    /**
     * partially update the specified ServiceAccount
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return ServiceAccount|mixed
     */
    public function patch(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/serviceaccounts/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchCoreV1NamespacedServiceAccount'
        );
    }

    /**
     * list or watch objects of kind ServiceAccount
     *
     * @return ServiceAccountList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/serviceaccounts"
        		,[
        		]
        	)
        	, 'listCoreV1ServiceAccountForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of ServiceAccount
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchList(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/serviceaccounts"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedServiceAccountList'
        );
    }

    /**
     * watch changes to an object of kind ServiceAccount
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/serviceaccounts/{$name}"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedServiceAccount'
        );
    }

    /**
     * watch individual changes to a list of ServiceAccount
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/serviceaccounts"
        		,[
        		]
        	)
        	, 'watchCoreV1ServiceAccountListForAllNamespaces'
        );
    }


}


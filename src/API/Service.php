<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\Service as Service;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\ServiceList as ServiceList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class Service extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind Service
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
     * @return ServiceList|mixed
     */
    public function list(string $namespace = 'default', array $queries)
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
     * @param string $namespace
     * @param Service $Model
     * @return Service|mixed
     */
    public function create(string $namespace = 'default', \Service $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/services"
        		,[
        			'json' => $Model->getArrayCopy(),
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
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return Service|mixed
     */
    public function read(string $namespace = 'default', $name, array $queries)
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
     * @param string $namespace
     * @param $name
     * @param Service $Model
     * @return Service|mixed
     */
    public function replace(string $namespace = 'default', $name, \Service $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/services/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1NamespacedService'
        );
    }

    /**
     * delete a Service
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
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Service|mixed
     */
    public function patch(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/services/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchCoreV1NamespacedService'
        );
    }

    /**
     * connect GET requests to proxy of Service
     *
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectGetProxy(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1GetNamespacedServiceProxy'
        );
    }

    /**
     * connect PUT requests to proxy of Service
     *
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPutProxy(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1PutNamespacedServiceProxy'
        );
    }

    /**
     * connect POST requests to proxy of Service
     *
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPostProxy(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1PostNamespacedServiceProxy'
        );
    }

    /**
     * connect DELETE requests to proxy of Service
     *
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectDeleteProxy(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1DeleteNamespacedServiceProxy'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Service
     *
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectOptionsProxy(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1OptionsNamespacedServiceProxy'
        );
    }

    /**
     * connect HEAD requests to proxy of Service
     *
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectHeadProxy(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1HeadNamespacedServiceProxy'
        );
    }

    /**
     * connect PATCH requests to proxy of Service
     *
     * @param string $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPatchProxy(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1PatchNamespacedServiceProxy'
        );
    }

    /**
     * connect GET requests to proxy of Service
     *
     * @param string $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectGetProxyWithPath(string $namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1GetNamespacedServiceProxyWithPath'
        );
    }

    /**
     * connect PUT requests to proxy of Service
     *
     * @param string $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectPutProxyWithPath(string $namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1PutNamespacedServiceProxyWithPath'
        );
    }

    /**
     * connect POST requests to proxy of Service
     *
     * @param string $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectPostProxyWithPath(string $namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1PostNamespacedServiceProxyWithPath'
        );
    }

    /**
     * connect DELETE requests to proxy of Service
     *
     * @param string $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectDeleteProxyWithPath(string $namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1DeleteNamespacedServiceProxyWithPath'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Service
     *
     * @param string $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectOptionsProxyWithPath(string $namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1OptionsNamespacedServiceProxyWithPath'
        );
    }

    /**
     * connect HEAD requests to proxy of Service
     *
     * @param string $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectHeadProxyWithPath(string $namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1HeadNamespacedServiceProxyWithPath'
        );
    }

    /**
     * connect PATCH requests to proxy of Service
     *
     * @param string $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectPatchProxyWithPath(string $namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1PatchNamespacedServiceProxyWithPath'
        );
    }

    /**
     * read status of the specified Service
     *
     * @param string $namespace
     * @param $name
     * @return Service|mixed
     */
    public function readStatus(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @param Service $Model
     * @return Service|mixed
     */
    public function replaceStatus(string $namespace = 'default', $name, \Service $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1NamespacedServiceStatus'
        );
    }

    /**
     * partially update status of the specified Service
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Service|mixed
     */
    public function patchStatus(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
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
     * watch individual changes to a list of Service
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchList(string $namespace = 'default')
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
     * watch changes to an object of kind Service
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch(string $namespace = 'default', $name)
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
     * watch individual changes to a list of Service
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


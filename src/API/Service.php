<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Core\V1\ServiceList as ServiceList;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\Service as TheService;
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
     * @param $namespace
     * @param TheService $Model
     * @return TheService|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Core\V1\Service $Model)
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
     * @param $namespace
     * @param $name
     * @param TheService $Model
     * @return TheService|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Core\V1\Service $Model)
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
     * @param $namespace
     * @param $name
     * @return Status|mixed
     */
    public function delete($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/services/{$name}"
        		,[
        		]
        	)
        	, 'deleteCoreV1NamespacedService'
        );
    }

    /**
     * partially update the specified Service
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheService|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectGetProxy($namespace = 'default', $name)
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
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPutProxy($namespace = 'default', $name)
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
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPostProxy($namespace = 'default', $name)
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
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectDeleteProxy($namespace = 'default', $name)
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
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectOptionsProxy($namespace = 'default', $name)
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
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectHeadProxy($namespace = 'default', $name)
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
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPatchProxy($namespace = 'default', $name)
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
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectGetProxyWithPath($namespace = 'default', $name, $path)
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
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectPutProxyWithPath($namespace = 'default', $name, $path)
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
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectPostProxyWithPath($namespace = 'default', $name, $path)
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
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectDeleteProxyWithPath($namespace = 'default', $name, $path)
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
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectOptionsProxyWithPath($namespace = 'default', $name, $path)
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
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectHeadProxyWithPath($namespace = 'default', $name, $path)
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
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectPatchProxyWithPath($namespace = 'default', $name, $path)
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
     * @param $namespace
     * @param $name
     * @param TheService $Model
     * @return TheService|mixed
     */
    public function replaceStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Core\V1\Service $Model)
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheService|mixed
     */
    public function patchStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * proxy GET requests to Service
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function proxyGET($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/proxy/namespaces/{$namespace}/services/{$name}"
        		,[
        		]
        	)
        	, 'proxyCoreV1GETNamespacedService'
        );
    }

    /**
     * proxy PUT requests to Service
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function proxyPUT($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/proxy/namespaces/{$namespace}/services/{$name}"
        		,[
        		]
        	)
        	, 'proxyCoreV1PUTNamespacedService'
        );
    }

    /**
     * proxy POST requests to Service
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function proxyPOST($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/proxy/namespaces/{$namespace}/services/{$name}"
        		,[
        		]
        	)
        	, 'proxyCoreV1POSTNamespacedService'
        );
    }

    /**
     * proxy DELETE requests to Service
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function proxyDELETE($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/proxy/namespaces/{$namespace}/services/{$name}"
        		,[
        		]
        	)
        	, 'proxyCoreV1DELETENamespacedService'
        );
    }

    /**
     * proxy OPTIONS requests to Service
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function proxyOPTIONS($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/proxy/namespaces/{$namespace}/services/{$name}"
        		,[
        		]
        	)
        	, 'proxyCoreV1OPTIONSNamespacedService'
        );
    }

    /**
     * proxy HEAD requests to Service
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function proxyHEAD($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/proxy/namespaces/{$namespace}/services/{$name}"
        		,[
        		]
        	)
        	, 'proxyCoreV1HEADNamespacedService'
        );
    }

    /**
     * proxy PATCH requests to Service
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function proxyPATCH($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/proxy/namespaces/{$namespace}/services/{$name}"
        		,[
        		]
        	)
        	, 'proxyCoreV1PATCHNamespacedService'
        );
    }

    /**
     * proxy GET requests to Service
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function proxyGETWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/proxy/namespaces/{$namespace}/services/{$name}/{$path}"
        		,[
        		]
        	)
        	, 'proxyCoreV1GETNamespacedServiceWithPath'
        );
    }

    /**
     * proxy PUT requests to Service
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function proxyPUTWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/proxy/namespaces/{$namespace}/services/{$name}/{$path}"
        		,[
        		]
        	)
        	, 'proxyCoreV1PUTNamespacedServiceWithPath'
        );
    }

    /**
     * proxy POST requests to Service
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function proxyPOSTWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/proxy/namespaces/{$namespace}/services/{$name}/{$path}"
        		,[
        		]
        	)
        	, 'proxyCoreV1POSTNamespacedServiceWithPath'
        );
    }

    /**
     * proxy DELETE requests to Service
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function proxyDELETEWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/proxy/namespaces/{$namespace}/services/{$name}/{$path}"
        		,[
        		]
        	)
        	, 'proxyCoreV1DELETENamespacedServiceWithPath'
        );
    }

    /**
     * proxy OPTIONS requests to Service
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function proxyOPTIONSWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/proxy/namespaces/{$namespace}/services/{$name}/{$path}"
        		,[
        		]
        	)
        	, 'proxyCoreV1OPTIONSNamespacedServiceWithPath'
        );
    }

    /**
     * proxy HEAD requests to Service
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function proxyHEADWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/proxy/namespaces/{$namespace}/services/{$name}/{$path}"
        		,[
        		]
        	)
        	, 'proxyCoreV1HEADNamespacedServiceWithPath'
        );
    }

    /**
     * proxy PATCH requests to Service
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function proxyPATCHWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/proxy/namespaces/{$namespace}/services/{$name}/{$path}"
        		,[
        		]
        	)
        	, 'proxyCoreV1PATCHNamespacedServiceWithPath'
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
     * watch changes to an object of kind Service
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


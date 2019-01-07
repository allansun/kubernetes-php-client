<?php

namespace Kubernetes\API;

class ServiceProxyOptions extends \Kubernetes\AbstractAPI
{

    /**
     * connect GET requests to proxy of Service
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectGetServiceProxy($namespace = 'default', $name)
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
    public function connectPutServiceProxy($namespace = 'default', $name)
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
    public function connectPostServiceProxy($namespace = 'default', $name)
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
    public function connectDeleteServiceProxy($namespace = 'default', $name)
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
    public function connectOptionsServiceProxy($namespace = 'default', $name)
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
    public function connectHeadServiceProxy($namespace = 'default', $name)
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
    public function connectPatchServiceProxy($namespace = 'default', $name)
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
    public function connectGetServiceProxyWithPath($namespace = 'default', $name, $path)
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
    public function connectPutServiceProxyWithPath($namespace = 'default', $name, $path)
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
    public function connectPostServiceProxyWithPath($namespace = 'default', $name, $path)
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
    public function connectDeleteServiceProxyWithPath($namespace = 'default', $name, $path)
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
    public function connectOptionsServiceProxyWithPath($namespace = 'default', $name, $path)
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
    public function connectHeadServiceProxyWithPath($namespace = 'default', $name, $path)
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
    public function connectPatchServiceProxyWithPath($namespace = 'default', $name, $path)
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


}


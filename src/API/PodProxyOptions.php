<?php

namespace Kubernetes\API;

class PodProxyOptions extends \Kubernetes\AbstractAPI
{

    /**
     * connect GET requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectGetPodProxy($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1GetNamespacedPodProxy'
        );
    }

    /**
     * connect PUT requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPutPodProxy($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1PutNamespacedPodProxy'
        );
    }

    /**
     * connect POST requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPostPodProxy($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1PostNamespacedPodProxy'
        );
    }

    /**
     * connect DELETE requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectDeletePodProxy($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1DeleteNamespacedPodProxy'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectOptionsPodProxy($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1OptionsNamespacedPodProxy'
        );
    }

    /**
     * connect HEAD requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectHeadPodProxy($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1HeadNamespacedPodProxy'
        );
    }

    /**
     * connect PATCH requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @return string|mixed
     */
    public function connectPatchPodProxy($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1PatchNamespacedPodProxy'
        );
    }

    /**
     * connect GET requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectGetPodProxyWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1GetNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect PUT requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectPutPodProxyWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1PutNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect POST requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectPostPodProxyWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1PostNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect DELETE requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectDeletePodProxyWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1DeleteNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectOptionsPodProxyWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1OptionsNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect HEAD requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectHeadPodProxyWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1HeadNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect PATCH requests to proxy of Pod
     *
     * @param $namespace
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectPatchPodProxyWithPath($namespace = 'default', $name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1PatchNamespacedPodProxyWithPath'
        );
    }


}


<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;

class PodProxyOptions extends AbstractAPI
{
    /**
     * connect GET requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the PodProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectGetPodProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1GetNamespacedPodProxy'
        );
    }

    /**
     * connect PUT requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the PodProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectPutPodProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PutNamespacedPodProxy'
        );
    }

    /**
     * connect POST requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the PodProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectPostPodProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PostNamespacedPodProxy'
        );
    }

    /**
     * connect DELETE requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the PodProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectDeletePodProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1DeleteNamespacedPodProxy'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the PodProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectOptionsPodProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1OptionsNamespacedPodProxy'
        );
    }

    /**
     * connect HEAD requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the PodProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectHeadPodProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1HeadNamespacedPodProxy'
        );
    }

    /**
     * connect PATCH requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the PodProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectPatchPodProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PatchNamespacedPodProxy'
        );
    }

    /**
     * connect GET requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the PodProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectGetPodProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1GetNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect PUT requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the PodProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectPutPodProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PutNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect POST requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the PodProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectPostPodProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PostNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect DELETE requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the PodProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectDeletePodProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1DeleteNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the PodProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectOptionsPodProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1OptionsNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect HEAD requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the PodProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectHeadPodProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1HeadNamespacedPodProxyWithPath'
        );
    }

    /**
     * connect PATCH requests to proxy of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the PodProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to pod.
     *
     * @return string|mixed
     */
    public function connectPatchPodProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PatchNamespacedPodProxyWithPath'
        );
    }
}


<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;

class ServiceProxyOptions extends AbstractAPI
{
    /**
     * connect GET requests to proxy of Service
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the ServiceProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the part of URLs that include service endpoints, suffixes, and
     * parameters to use for the current proxy request to service. For example, the
     * whole request URL is
     * http://localhost/api/v1/namespaces/kube-system/services/elasticsearch-logging/_search?q=user:kimchy.
     * Path is _search?q=user:kimchy.
     *
     * @return string|mixed
     */
    public function connectGetServiceProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1GetNamespacedServiceProxy'
        );
    }

    /**
     * connect PUT requests to proxy of Service
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the ServiceProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the part of URLs that include service endpoints, suffixes, and
     * parameters to use for the current proxy request to service. For example, the
     * whole request URL is
     * http://localhost/api/v1/namespaces/kube-system/services/elasticsearch-logging/_search?q=user:kimchy.
     * Path is _search?q=user:kimchy.
     *
     * @return string|mixed
     */
    public function connectPutServiceProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PutNamespacedServiceProxy'
        );
    }

    /**
     * connect POST requests to proxy of Service
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the ServiceProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the part of URLs that include service endpoints, suffixes, and
     * parameters to use for the current proxy request to service. For example, the
     * whole request URL is
     * http://localhost/api/v1/namespaces/kube-system/services/elasticsearch-logging/_search?q=user:kimchy.
     * Path is _search?q=user:kimchy.
     *
     * @return string|mixed
     */
    public function connectPostServiceProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PostNamespacedServiceProxy'
        );
    }

    /**
     * connect DELETE requests to proxy of Service
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the ServiceProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the part of URLs that include service endpoints, suffixes, and
     * parameters to use for the current proxy request to service. For example, the
     * whole request URL is
     * http://localhost/api/v1/namespaces/kube-system/services/elasticsearch-logging/_search?q=user:kimchy.
     * Path is _search?q=user:kimchy.
     *
     * @return string|mixed
     */
    public function connectDeleteServiceProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1DeleteNamespacedServiceProxy'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Service
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the ServiceProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the part of URLs that include service endpoints, suffixes, and
     * parameters to use for the current proxy request to service. For example, the
     * whole request URL is
     * http://localhost/api/v1/namespaces/kube-system/services/elasticsearch-logging/_search?q=user:kimchy.
     * Path is _search?q=user:kimchy.
     *
     * @return string|mixed
     */
    public function connectOptionsServiceProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1OptionsNamespacedServiceProxy'
        );
    }

    /**
     * connect HEAD requests to proxy of Service
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the ServiceProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the part of URLs that include service endpoints, suffixes, and
     * parameters to use for the current proxy request to service. For example, the
     * whole request URL is
     * http://localhost/api/v1/namespaces/kube-system/services/elasticsearch-logging/_search?q=user:kimchy.
     * Path is _search?q=user:kimchy.
     *
     * @return string|mixed
     */
    public function connectHeadServiceProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1HeadNamespacedServiceProxy'
        );
    }

    /**
     * connect PATCH requests to proxy of Service
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the ServiceProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the part of URLs that include service endpoints, suffixes, and
     * parameters to use for the current proxy request to service. For example, the
     * whole request URL is
     * http://localhost/api/v1/namespaces/kube-system/services/elasticsearch-logging/_search?q=user:kimchy.
     * Path is _search?q=user:kimchy.
     *
     * @return string|mixed
     */
    public function connectPatchServiceProxy(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PatchNamespacedServiceProxy'
        );
    }

    /**
     * connect GET requests to proxy of Service
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the ServiceProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the part of URLs that include service endpoints, suffixes, and
     * parameters to use for the current proxy request to service. For example, the
     * whole request URL is
     * http://localhost/api/v1/namespaces/kube-system/services/elasticsearch-logging/_search?q=user:kimchy.
     * Path is _search?q=user:kimchy.
     *
     * @return string|mixed
     */
    public function connectGetServiceProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1GetNamespacedServiceProxyWithPath'
        );
    }

    /**
     * connect PUT requests to proxy of Service
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the ServiceProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the part of URLs that include service endpoints, suffixes, and
     * parameters to use for the current proxy request to service. For example, the
     * whole request URL is
     * http://localhost/api/v1/namespaces/kube-system/services/elasticsearch-logging/_search?q=user:kimchy.
     * Path is _search?q=user:kimchy.
     *
     * @return string|mixed
     */
    public function connectPutServiceProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PutNamespacedServiceProxyWithPath'
        );
    }

    /**
     * connect POST requests to proxy of Service
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the ServiceProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the part of URLs that include service endpoints, suffixes, and
     * parameters to use for the current proxy request to service. For example, the
     * whole request URL is
     * http://localhost/api/v1/namespaces/kube-system/services/elasticsearch-logging/_search?q=user:kimchy.
     * Path is _search?q=user:kimchy.
     *
     * @return string|mixed
     */
    public function connectPostServiceProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PostNamespacedServiceProxyWithPath'
        );
    }

    /**
     * connect DELETE requests to proxy of Service
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the ServiceProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the part of URLs that include service endpoints, suffixes, and
     * parameters to use for the current proxy request to service. For example, the
     * whole request URL is
     * http://localhost/api/v1/namespaces/kube-system/services/elasticsearch-logging/_search?q=user:kimchy.
     * Path is _search?q=user:kimchy.
     *
     * @return string|mixed
     */
    public function connectDeleteServiceProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1DeleteNamespacedServiceProxyWithPath'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Service
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the ServiceProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the part of URLs that include service endpoints, suffixes, and
     * parameters to use for the current proxy request to service. For example, the
     * whole request URL is
     * http://localhost/api/v1/namespaces/kube-system/services/elasticsearch-logging/_search?q=user:kimchy.
     * Path is _search?q=user:kimchy.
     *
     * @return string|mixed
     */
    public function connectOptionsServiceProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1OptionsNamespacedServiceProxyWithPath'
        );
    }

    /**
     * connect HEAD requests to proxy of Service
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the ServiceProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the part of URLs that include service endpoints, suffixes, and
     * parameters to use for the current proxy request to service. For example, the
     * whole request URL is
     * http://localhost/api/v1/namespaces/kube-system/services/elasticsearch-logging/_search?q=user:kimchy.
     * Path is _search?q=user:kimchy.
     *
     * @return string|mixed
     */
    public function connectHeadServiceProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1HeadNamespacedServiceProxyWithPath'
        );
    }

    /**
     * connect PATCH requests to proxy of Service
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the ServiceProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the part of URLs that include service endpoints, suffixes, and
     * parameters to use for the current proxy request to service. For example, the
     * whole request URL is
     * http://localhost/api/v1/namespaces/kube-system/services/elasticsearch-logging/_search?q=user:kimchy.
     * Path is _search?q=user:kimchy.
     *
     * @return string|mixed
     */
    public function connectPatchServiceProxyWithPath(string $namespace, string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/services/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PatchNamespacedServiceProxyWithPath'
        );
    }
}


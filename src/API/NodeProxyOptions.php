<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;

class NodeProxyOptions extends AbstractAPI
{
    /**
     * connect GET requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectGetNodeProxy(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1GetNodeProxy'
        );
    }

    /**
     * connect PUT requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectPutNodeProxy(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PutNodeProxy'
        );
    }

    /**
     * connect POST requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectPostNodeProxy(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PostNodeProxy'
        );
    }

    /**
     * connect DELETE requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectDeleteNodeProxy(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1DeleteNodeProxy'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectOptionsNodeProxy(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1OptionsNodeProxy'
        );
    }

    /**
     * connect HEAD requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectHeadNodeProxy(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1HeadNodeProxy'
        );
    }

    /**
     * connect PATCH requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectPatchNodeProxy(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PatchNodeProxy'
        );
    }

    /**
     * connect GET requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectGetNodeProxyWithPath(string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/nodes/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1GetNodeProxyWithPath'
        );
    }

    /**
     * connect PUT requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectPutNodeProxyWithPath(string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/nodes/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PutNodeProxyWithPath'
        );
    }

    /**
     * connect POST requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectPostNodeProxyWithPath(string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/nodes/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PostNodeProxyWithPath'
        );
    }

    /**
     * connect DELETE requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectDeleteNodeProxyWithPath(string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/nodes/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1DeleteNodeProxyWithPath'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectOptionsNodeProxyWithPath(string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/nodes/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1OptionsNodeProxyWithPath'
        );
    }

    /**
     * connect HEAD requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectHeadNodeProxyWithPath(string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/nodes/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1HeadNodeProxyWithPath'
        );
    }

    /**
     * connect PATCH requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @param string $path path to the resource
     * @param array $queries options:
     * 'path'	string
     * Path is the URL path to use for the current proxy request to node.
     *
     * @return string|mixed
     */
    public function connectPatchNodeProxyWithPath(string $name, string $path, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/nodes/{$name}/proxy/{$path}",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PatchNodeProxyWithPath'
        );
    }
}


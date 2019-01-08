<?php

namespace Kubernetes\API;

class NodeProxyOptions extends \Kubernetes\AbstractAPI
{

    /**
     * connect GET requests to proxy of Node
     *
     * @param $name
     * @return string|mixed
     */
    public function connectGetNodeProxy($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/nodes/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1GetNodeProxy'
        );
    }

    /**
     * connect PUT requests to proxy of Node
     *
     * @param $name
     * @return string|mixed
     */
    public function connectPutNodeProxy($name)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/nodes/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1PutNodeProxy'
        );
    }

    /**
     * connect POST requests to proxy of Node
     *
     * @param $name
     * @return string|mixed
     */
    public function connectPostNodeProxy($name)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/nodes/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1PostNodeProxy'
        );
    }

    /**
     * connect DELETE requests to proxy of Node
     *
     * @param $name
     * @return string|mixed
     */
    public function connectDeleteNodeProxy($name)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/nodes/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1DeleteNodeProxy'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Node
     *
     * @param $name
     * @return string|mixed
     */
    public function connectOptionsNodeProxy($name)
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/nodes/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1OptionsNodeProxy'
        );
    }

    /**
     * connect HEAD requests to proxy of Node
     *
     * @param $name
     * @return string|mixed
     */
    public function connectHeadNodeProxy($name)
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/nodes/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1HeadNodeProxy'
        );
    }

    /**
     * connect PATCH requests to proxy of Node
     *
     * @param $name
     * @return string|mixed
     */
    public function connectPatchNodeProxy($name)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/nodes/{$name}/proxy"
        		,[
        		]
        	)
        	, 'connectCoreV1PatchNodeProxy'
        );
    }

    /**
     * connect GET requests to proxy of Node
     *
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectGetNodeProxyWithPath($name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/nodes/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1GetNodeProxyWithPath'
        );
    }

    /**
     * connect PUT requests to proxy of Node
     *
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectPutNodeProxyWithPath($name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/nodes/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1PutNodeProxyWithPath'
        );
    }

    /**
     * connect POST requests to proxy of Node
     *
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectPostNodeProxyWithPath($name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/nodes/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1PostNodeProxyWithPath'
        );
    }

    /**
     * connect DELETE requests to proxy of Node
     *
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectDeleteNodeProxyWithPath($name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/nodes/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1DeleteNodeProxyWithPath'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Node
     *
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectOptionsNodeProxyWithPath($name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/nodes/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1OptionsNodeProxyWithPath'
        );
    }

    /**
     * connect HEAD requests to proxy of Node
     *
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectHeadNodeProxyWithPath($name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/nodes/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1HeadNodeProxyWithPath'
        );
    }

    /**
     * connect PATCH requests to proxy of Node
     *
     * @param $name
     * @param $path
     * @return string|mixed
     */
    public function connectPatchNodeProxyWithPath($name, $path)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/nodes/{$name}/proxy/{$path}"
        		,[
        		]
        	)
        	, 'connectCoreV1PatchNodeProxyWithPath'
        );
    }


}


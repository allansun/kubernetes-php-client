<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Core\V1\NodeList as NodeList;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\Node as TheNode;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class Node extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind Node
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
     * @param array $queries
     * @return NodeList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/nodes"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listCoreV1Node'
        );
    }

    /**
     * create a Node
     *
     * @param TheNode $Model
     * @return TheNode|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Core\V1\Node $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/nodes"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createCoreV1Node'
        );
    }

    /**
     * delete collection of Node
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
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/nodes"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1CollectionNode'
        );
    }

    /**
     * read the specified Node
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheNode|mixed
     */
    public function read($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/nodes/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readCoreV1Node'
        );
    }

    /**
     * replace the specified Node
     *
     * @param $name
     * @param TheNode $Model
     * @return TheNode|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Core\V1\Node $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/nodes/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1Node'
        );
    }

    /**
     * delete a Node
     *
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function delete($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/nodes/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1Node'
        );
    }

    /**
     * partially update the specified Node
     *
     * @param $name
     * @param Patch $Model
     * @return TheNode|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/nodes/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchCoreV1Node'
        );
    }

    /**
     * read status of the specified Node
     *
     * @param $name
     * @return TheNode|mixed
     */
    public function readStatus($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/nodes/{$name}/status"
        		,[
        		]
        	)
        	, 'readCoreV1NodeStatus'
        );
    }

    /**
     * replace status of the specified Node
     *
     * @param $name
     * @param TheNode $Model
     * @return TheNode|mixed
     */
    public function replaceStatus($name, \Kubernetes\Model\Io\K8s\Api\Core\V1\Node $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/nodes/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1NodeStatus'
        );
    }

    /**
     * partially update status of the specified Node
     *
     * @param $name
     * @param Patch $Model
     * @return TheNode|mixed
     */
    public function patchStatus($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/nodes/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchCoreV1NodeStatus'
        );
    }

    /**
     * watch individual changes to a list of Node. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/nodes"
        		,[
        		]
        	)
        	, 'watchCoreV1NodeList'
        );
    }

    /**
     * watch changes to an object of kind Node. deprecated: use the 'watch' parameter
     * with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/nodes/{$name}"
        		,[
        		]
        	)
        	, 'watchCoreV1Node'
        );
    }


}


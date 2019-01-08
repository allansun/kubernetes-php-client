<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Core\V1\LimitRangeList as LimitRangeList;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\LimitRange as TheLimitRange;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class LimitRange extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind LimitRange
     *
     * @return LimitRangeList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/limitranges"
        		,[
        		]
        	)
        	, 'listCoreV1LimitRangeForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind LimitRange
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param $namespace
     * @param array $queries
     * @return LimitRangeList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/limitranges"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listCoreV1NamespacedLimitRange'
        );
    }

    /**
     * create a LimitRange
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param TheLimitRange $Model
     * @param array $queries
     * @return TheLimitRange|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Core\V1\LimitRange $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/limitranges"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createCoreV1NamespacedLimitRange'
        );
    }

    /**
     * delete collection of LimitRange
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/limitranges"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1CollectionNamespacedLimitRange'
        );
    }

    /**
     * read the specified LimitRange
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheLimitRange|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/limitranges/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readCoreV1NamespacedLimitRange'
        );
    }

    /**
     * replace the specified LimitRange
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param TheLimitRange $Model
     * @param array $queries
     * @return TheLimitRange|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Core\V1\LimitRange $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/limitranges/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceCoreV1NamespacedLimitRange'
        );
    }

    /**
     * delete a LimitRange
     *
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $namespace
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function delete($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/limitranges/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1NamespacedLimitRange'
        );
    }

    /**
     * partially update the specified LimitRange
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheLimitRange|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/limitranges/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchCoreV1NamespacedLimitRange'
        );
    }

    /**
     * watch individual changes to a list of LimitRange. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/limitranges"
        		,[
        		]
        	)
        	, 'watchCoreV1LimitRangeListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of LimitRange. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/limitranges"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedLimitRangeList'
        );
    }

    /**
     * watch changes to an object of kind LimitRange. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/limitranges/{$name}"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedLimitRange'
        );
    }


}


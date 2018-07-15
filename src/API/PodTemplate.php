<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\PodTemplate as PodTemplate;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\PodTemplateList as PodTemplateList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class PodTemplate extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind PodTemplate
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
     * @return PodTemplateList|mixed
     */
    public function list(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/podtemplates"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listCoreV1NamespacedPodTemplate'
        );
    }

    /**
     * create a PodTemplate
     *
     * @param string $namespace
     * @param PodTemplate $Model
     * @return PodTemplate|mixed
     */
    public function create(string $namespace = 'default', \PodTemplate $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/podtemplates"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createCoreV1NamespacedPodTemplate'
        );
    }

    /**
     * delete collection of PodTemplate
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
     * @return Status|mixed
     */
    public function deleteCollection(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/podtemplates"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1CollectionNamespacedPodTemplate'
        );
    }

    /**
     * read the specified PodTemplate
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return PodTemplate|mixed
     */
    public function read(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/podtemplates/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readCoreV1NamespacedPodTemplate'
        );
    }

    /**
     * replace the specified PodTemplate
     *
     * @param string $namespace
     * @param $name
     * @param PodTemplate $Model
     * @return PodTemplate|mixed
     */
    public function replace(string $namespace = 'default', $name, \PodTemplate $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/podtemplates/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1NamespacedPodTemplate'
        );
    }

    /**
     * delete a PodTemplate
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
        		"/api/v1/namespaces/{$namespace}/podtemplates/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1NamespacedPodTemplate'
        );
    }

    /**
     * partially update the specified PodTemplate
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return PodTemplate|mixed
     */
    public function patch(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/podtemplates/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchCoreV1NamespacedPodTemplate'
        );
    }

    /**
     * list or watch objects of kind PodTemplate
     *
     * @return PodTemplateList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/podtemplates"
        		,[
        		]
        	)
        	, 'listCoreV1PodTemplateForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of PodTemplate
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchList(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/podtemplates"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedPodTemplateList'
        );
    }

    /**
     * watch changes to an object of kind PodTemplate
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/podtemplates/{$name}"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedPodTemplate'
        );
    }

    /**
     * watch individual changes to a list of PodTemplate
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/podtemplates"
        		,[
        		]
        	)
        	, 'watchCoreV1PodTemplateListForAllNamespaces'
        );
    }


}


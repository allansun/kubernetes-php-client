<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Core\V1\PodTemplateList as PodTemplateList;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\PodTemplate as ThePodTemplate;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class PodTemplate extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind PodTemplate
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
     * @return PodTemplateList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param ThePodTemplate $Model
     * @param array $queries
     * @return ThePodTemplate|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Core\V1\PodTemplate $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/podtemplates"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
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
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return ThePodTemplate|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param ThePodTemplate $Model
     * @param array $queries
     * @return ThePodTemplate|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Core\V1\PodTemplate $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/podtemplates/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceCoreV1NamespacedPodTemplate'
        );
    }

    /**
     * delete a PodTemplate
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
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return ThePodTemplate|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/podtemplates/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
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
     * watch individual changes to a list of PodTemplate. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
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
     * watch changes to an object of kind PodTemplate. deprecated: use the 'watch'
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
        		"/api/v1/watch/namespaces/{$namespace}/podtemplates/{$name}"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedPodTemplate'
        );
    }

    /**
     * watch individual changes to a list of PodTemplate. deprecated: use the 'watch'
     * parameter with a list operation instead.
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


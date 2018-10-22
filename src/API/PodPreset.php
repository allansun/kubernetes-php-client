<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Settings\V1alpha1\PodPresetList as PodPresetList;
use \Kubernetes\Model\Io\K8s\Api\Settings\V1alpha1\PodPreset as ThePodPreset;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class PodPreset extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind PodPreset
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
     * @param $namespace
     * @param array $queries
     * @return PodPresetList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/settings.k8s.io/v1alpha1/namespaces/{$namespace}/podpresets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listSettingsV1alpha1NamespacedPodPreset'
        );
    }

    /**
     * create a PodPreset
     *
     * @param $namespace
     * @param ThePodPreset $Model
     * @return ThePodPreset|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Settings\V1alpha1\PodPreset $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/settings.k8s.io/v1alpha1/namespaces/{$namespace}/podpresets"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createSettingsV1alpha1NamespacedPodPreset'
        );
    }

    /**
     * delete collection of PodPreset
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
     * @param $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/settings.k8s.io/v1alpha1/namespaces/{$namespace}/podpresets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteSettingsV1alpha1CollectionNamespacedPodPreset'
        );
    }

    /**
     * read the specified PodPreset
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return ThePodPreset|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/settings.k8s.io/v1alpha1/namespaces/{$namespace}/podpresets/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readSettingsV1alpha1NamespacedPodPreset'
        );
    }

    /**
     * replace the specified PodPreset
     *
     * @param $namespace
     * @param $name
     * @param ThePodPreset $Model
     * @return ThePodPreset|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Settings\V1alpha1\PodPreset $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/settings.k8s.io/v1alpha1/namespaces/{$namespace}/podpresets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceSettingsV1alpha1NamespacedPodPreset'
        );
    }

    /**
     * delete a PodPreset
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
        		"/apis/settings.k8s.io/v1alpha1/namespaces/{$namespace}/podpresets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteSettingsV1alpha1NamespacedPodPreset'
        );
    }

    /**
     * partially update the specified PodPreset
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return ThePodPreset|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/settings.k8s.io/v1alpha1/namespaces/{$namespace}/podpresets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchSettingsV1alpha1NamespacedPodPreset'
        );
    }

    /**
     * list or watch objects of kind PodPreset
     *
     * @return PodPresetList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/settings.k8s.io/v1alpha1/podpresets"
        		,[
        		]
        	)
        	, 'listSettingsV1alpha1PodPresetForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of PodPreset. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/settings.k8s.io/v1alpha1/watch/namespaces/{$namespace}/podpresets"
        		,[
        		]
        	)
        	, 'watchSettingsV1alpha1NamespacedPodPresetList'
        );
    }

    /**
     * watch changes to an object of kind PodPreset. deprecated: use the 'watch'
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
        		"/apis/settings.k8s.io/v1alpha1/watch/namespaces/{$namespace}/podpresets/{$name}"
        		,[
        		]
        	)
        	, 'watchSettingsV1alpha1NamespacedPodPreset'
        );
    }

    /**
     * watch individual changes to a list of PodPreset. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/settings.k8s.io/v1alpha1/watch/podpresets"
        		,[
        		]
        	)
        	, 'watchSettingsV1alpha1PodPresetListForAllNamespaces'
        );
    }


}


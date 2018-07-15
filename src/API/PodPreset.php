<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Settings\V1alpha1\PodPreset as PodPreset;
use \Kubernetes\Model\Io\K8s\Api\Settings\V1alpha1\PodPresetList as PodPresetList;
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
     * @param string $namespace
     * @param array $queries
     * @return PodPresetList|mixed
     */
    public function list(string $namespace = 'default', array $queries)
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
     * @param string $namespace
     * @param PodPreset $Model
     * @return PodPreset|mixed
     */
    public function create(string $namespace = 'default', \PodPreset $Model)
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
     * @param string $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection(string $namespace = 'default', array $queries)
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
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return PodPreset|mixed
     */
    public function read(string $namespace = 'default', $name, array $queries)
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
     * @param string $namespace
     * @param $name
     * @param PodPreset $Model
     * @return PodPreset|mixed
     */
    public function replace(string $namespace = 'default', $name, \PodPreset $Model)
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
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return PodPreset|mixed
     */
    public function patch(string $namespace = 'default', $name, \Patch $Model)
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
     * watch individual changes to a list of PodPreset
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchList(string $namespace = 'default')
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
     * watch changes to an object of kind PodPreset
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch(string $namespace = 'default', $name)
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
     * watch individual changes to a list of PodPreset
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


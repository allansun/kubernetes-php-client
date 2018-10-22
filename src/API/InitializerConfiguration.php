<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1\InitializerConfigurationList as InitializerConfigurationList;
use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1\InitializerConfiguration as TheInitializerConfiguration;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class InitializerConfiguration extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind InitializerConfiguration
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
     * @return InitializerConfigurationList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1alpha1/initializerconfigurations"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAdmissionregistrationV1alpha1InitializerConfiguration'
        );
    }

    /**
     * create an InitializerConfiguration
     *
     * @param TheInitializerConfiguration $Model
     * @return TheInitializerConfiguration|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1\InitializerConfiguration $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/admissionregistration.k8s.io/v1alpha1/initializerconfigurations"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAdmissionregistrationV1alpha1InitializerConfiguration'
        );
    }

    /**
     * delete collection of InitializerConfiguration
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
        		"/apis/admissionregistration.k8s.io/v1alpha1/initializerconfigurations"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAdmissionregistrationV1alpha1CollectionInitializerConfiguration'
        );
    }

    /**
     * read the specified InitializerConfiguration
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheInitializerConfiguration|mixed
     */
    public function read($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1alpha1/initializerconfigurations/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAdmissionregistrationV1alpha1InitializerConfiguration'
        );
    }

    /**
     * replace the specified InitializerConfiguration
     *
     * @param $name
     * @param TheInitializerConfiguration $Model
     * @return TheInitializerConfiguration|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1\InitializerConfiguration $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/admissionregistration.k8s.io/v1alpha1/initializerconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAdmissionregistrationV1alpha1InitializerConfiguration'
        );
    }

    /**
     * delete an InitializerConfiguration
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
        		"/apis/admissionregistration.k8s.io/v1alpha1/initializerconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAdmissionregistrationV1alpha1InitializerConfiguration'
        );
    }

    /**
     * partially update the specified InitializerConfiguration
     *
     * @param $name
     * @param Patch $Model
     * @return TheInitializerConfiguration|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/admissionregistration.k8s.io/v1alpha1/initializerconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAdmissionregistrationV1alpha1InitializerConfiguration'
        );
    }

    /**
     * watch individual changes to a list of InitializerConfiguration. deprecated: use
     * the 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1alpha1/watch/initializerconfigurations"
        		,[
        		]
        	)
        	, 'watchAdmissionregistrationV1alpha1InitializerConfigurationList'
        );
    }

    /**
     * watch changes to an object of kind InitializerConfiguration. deprecated: use the
     * 'watch' parameter with a list operation instead, filtered to a single item with
     * the 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1alpha1/watch/initializerconfigurations/{$name}"
        		,[
        		]
        	)
        	, 'watchAdmissionregistrationV1alpha1InitializerConfiguration'
        );
    }


}


<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1\CustomResourceDefinitionList as CustomResourceDefinitionList;
use \Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1\CustomResourceDefinition as TheCustomResourceDefinition;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class CustomResourceDefinition extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind CustomResourceDefinition
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
     * @return CustomResourceDefinitionList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listApiextensionsV1beta1CustomResourceDefinition'
        );
    }

    /**
     * create a CustomResourceDefinition
     *
     * @param TheCustomResourceDefinition $Model
     * @return TheCustomResourceDefinition|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1\CustomResourceDefinition $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createApiextensionsV1beta1CustomResourceDefinition'
        );
    }

    /**
     * delete collection of CustomResourceDefinition
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
        		"/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteApiextensionsV1beta1CollectionCustomResourceDefinition'
        );
    }

    /**
     * read the specified CustomResourceDefinition
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheCustomResourceDefinition|mixed
     */
    public function read($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readApiextensionsV1beta1CustomResourceDefinition'
        );
    }

    /**
     * replace the specified CustomResourceDefinition
     *
     * @param $name
     * @param TheCustomResourceDefinition $Model
     * @return TheCustomResourceDefinition|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1\CustomResourceDefinition $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceApiextensionsV1beta1CustomResourceDefinition'
        );
    }

    /**
     * delete a CustomResourceDefinition
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
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
        		"/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteApiextensionsV1beta1CustomResourceDefinition'
        );
    }

    /**
     * partially update the specified CustomResourceDefinition
     *
     * @param $name
     * @param Patch $Model
     * @return TheCustomResourceDefinition|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchApiextensionsV1beta1CustomResourceDefinition'
        );
    }

    /**
     * replace status of the specified CustomResourceDefinition
     *
     * @param $name
     * @param TheCustomResourceDefinition $Model
     * @return TheCustomResourceDefinition|mixed
     */
    public function replaceStatus($name, \Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1\CustomResourceDefinition $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceApiextensionsV1beta1CustomResourceDefinitionStatus'
        );
    }

    /**
     * watch individual changes to a list of CustomResourceDefinition
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiextensions.k8s.io/v1beta1/watch/customresourcedefinitions"
        		,[
        		]
        	)
        	, 'watchApiextensionsV1beta1CustomResourceDefinitionList'
        );
    }

    /**
     * watch changes to an object of kind CustomResourceDefinition
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiextensions.k8s.io/v1beta1/watch/customresourcedefinitions/{$name}"
        		,[
        		]
        	)
        	, 'watchApiextensionsV1beta1CustomResourceDefinition'
        );
    }


}


<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1\CustomResourceDefinitionList as CustomResourceDefinitionList;
use \Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1\CustomResourceDefinition as TheCustomResourceDefinition;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1\CustomResourceDefinitionList as CustomResourceDefinitionListV1beta1;
use \Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1\CustomResourceDefinition as TheCustomResourceDefinitionV1beta1;

class CustomResourceDefinition extends \KubernetesRuntime\AbstractAPI
{

    /**
     * list or watch objects of kind CustomResourceDefinition
     *
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey resourceVersionMatch	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey resourceVersionMatch	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return CustomResourceDefinitionList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiextensions.k8s.io/v1/customresourcedefinitions"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listApiextensionsV1CustomResourceDefinition'
        );
    }

    /**
     * create a CustomResourceDefinition
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param TheCustomResourceDefinition $Model
     * @param array $queries
     * @return TheCustomResourceDefinition|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1\CustomResourceDefinition $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apiextensions.k8s.io/v1/customresourcedefinitions"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createApiextensionsV1CustomResourceDefinition'
        );
    }

    /**
     * delete collection of CustomResourceDefinition
     *
     * @configkey continue	string
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey resourceVersionMatch	string
     * @configkey timeoutSeconds	integer
     * @configkey continue	string
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey resourceVersionMatch	string
     * @configkey timeoutSeconds	integer
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection(\Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/apiextensions.k8s.io/v1/customresourcedefinitions"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteApiextensionsV1CollectionCustomResourceDefinition'
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
        		"/apis/apiextensions.k8s.io/v1/customresourcedefinitions/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readApiextensionsV1CustomResourceDefinition'
        );
    }

    /**
     * replace the specified CustomResourceDefinition
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheCustomResourceDefinition $Model
     * @param array $queries
     * @return TheCustomResourceDefinition|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1\CustomResourceDefinition $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apiextensions.k8s.io/v1/customresourcedefinitions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceApiextensionsV1CustomResourceDefinition'
        );
    }

    /**
     * delete a CustomResourceDefinition
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
        		"/apis/apiextensions.k8s.io/v1/customresourcedefinitions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteApiextensionsV1CustomResourceDefinition'
        );
    }

    /**
     * partially update the specified CustomResourceDefinition
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheCustomResourceDefinition|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apiextensions.k8s.io/v1/customresourcedefinitions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchApiextensionsV1CustomResourceDefinition'
        );
    }

    /**
     * read status of the specified CustomResourceDefinition
     *
     * @param $name
     * @return TheCustomResourceDefinition|mixed
     */
    public function readStatus($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiextensions.k8s.io/v1/customresourcedefinitions/{$name}/status"
        		,[
        		]
        	)
        	, 'readApiextensionsV1CustomResourceDefinitionStatus'
        );
    }

    /**
     * replace status of the specified CustomResourceDefinition
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheCustomResourceDefinition $Model
     * @param array $queries
     * @return TheCustomResourceDefinition|mixed
     */
    public function replaceStatus($name, \Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1\CustomResourceDefinition $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apiextensions.k8s.io/v1/customresourcedefinitions/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceApiextensionsV1CustomResourceDefinitionStatus'
        );
    }

    /**
     * partially update status of the specified CustomResourceDefinition
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheCustomResourceDefinition|mixed
     */
    public function patchStatus($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apiextensions.k8s.io/v1/customresourcedefinitions/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchApiextensionsV1CustomResourceDefinitionStatus'
        );
    }

    /**
     * watch individual changes to a list of CustomResourceDefinition. deprecated: use
     * the 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiextensions.k8s.io/v1/watch/customresourcedefinitions"
        		,[
        		]
        	)
        	, 'watchApiextensionsV1CustomResourceDefinitionList'
        );
    }

    /**
     * watch changes to an object of kind CustomResourceDefinition. deprecated: use the
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
        		"/apis/apiextensions.k8s.io/v1/watch/customresourcedefinitions/{$name}"
        		,[
        		]
        	)
        	, 'watchApiextensionsV1CustomResourceDefinition'
        );
    }

    /**
     * list or watch objects of kind CustomResourceDefinition
     *
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey resourceVersionMatch	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey resourceVersionMatch	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return CustomResourceDefinitionListV1beta1|mixed
     */
    public function listApiextensionsV1beta1(array $queries = [])
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
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param TheCustomResourceDefinitionV1beta1 $Model
     * @param array $queries
     * @return TheCustomResourceDefinitionV1beta1|mixed
     */
    public function createApiextensionsV1beta1(\Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1\CustomResourceDefinition $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createApiextensionsV1beta1CustomResourceDefinition'
        );
    }

    /**
     * delete collection of CustomResourceDefinition
     *
     * @configkey continue	string
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey resourceVersionMatch	string
     * @configkey timeoutSeconds	integer
     * @configkey continue	string
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey resourceVersionMatch	string
     * @configkey timeoutSeconds	integer
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollectionApiextensionsV1beta1(\Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions"
        		,[
        			'json' => $Model->getArrayCopy(),
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
     * @return TheCustomResourceDefinitionV1beta1|mixed
     */
    public function readApiextensionsV1beta1($name, array $queries = [])
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
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheCustomResourceDefinitionV1beta1 $Model
     * @param array $queries
     * @return TheCustomResourceDefinitionV1beta1|mixed
     */
    public function replaceApiextensionsV1beta1($name, \Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1\CustomResourceDefinition $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceApiextensionsV1beta1CustomResourceDefinition'
        );
    }

    /**
     * delete a CustomResourceDefinition
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
    public function deleteApiextensionsV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
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
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheCustomResourceDefinitionV1beta1|mixed
     */
    public function patchApiextensionsV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchApiextensionsV1beta1CustomResourceDefinition'
        );
    }

    /**
     * read status of the specified CustomResourceDefinition
     *
     * @param $name
     * @return TheCustomResourceDefinitionV1beta1|mixed
     */
    public function readStatusApiextensionsV1beta1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{$name}/status"
        		,[
        		]
        	)
        	, 'readApiextensionsV1beta1CustomResourceDefinitionStatus'
        );
    }

    /**
     * replace status of the specified CustomResourceDefinition
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheCustomResourceDefinitionV1beta1 $Model
     * @param array $queries
     * @return TheCustomResourceDefinitionV1beta1|mixed
     */
    public function replaceStatusApiextensionsV1beta1($name, \Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1\CustomResourceDefinition $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceApiextensionsV1beta1CustomResourceDefinitionStatus'
        );
    }

    /**
     * partially update status of the specified CustomResourceDefinition
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheCustomResourceDefinitionV1beta1|mixed
     */
    public function patchStatusApiextensionsV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchApiextensionsV1beta1CustomResourceDefinitionStatus'
        );
    }

    /**
     * watch individual changes to a list of CustomResourceDefinition. deprecated: use
     * the 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListApiextensionsV1beta1()
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
     * watch changes to an object of kind CustomResourceDefinition. deprecated: use the
     * 'watch' parameter with a list operation instead, filtered to a single item with
     * the 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchApiextensionsV1beta1($name)
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


<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Kube_aggregator\Pkg\Apis\Apiregistration\V1\APIServiceList as APIServiceList;
use \Kubernetes\Model\Io\K8s\Kube_aggregator\Pkg\Apis\Apiregistration\V1\APIService as APIService;
use \Kubernetes\Model\Io\K8s\Kube_aggregator\Pkg\Apis\Apiregistration\V1beta1\APIServiceList as APIServiceList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Kube_aggregator\Pkg\Apis\Apiregistration\V1beta1\APIService as APIService;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class APIService extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind APIService
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
     * @return APIServiceList|mixed
     */
    public function list(array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiregistration.k8s.io/v1/apiservices"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listApiregistrationV1APIService'
        );
    }

    /**
     * create an APIService
     *
     * @param APIService $Model
     * @return APIService|mixed
     */
    public function create(\APIService $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apiregistration.k8s.io/v1/apiservices"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createApiregistrationV1APIService'
        );
    }

    /**
     * delete collection of APIService
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
    public function deleteCollection(array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/apiregistration.k8s.io/v1/apiservices"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteApiregistrationV1CollectionAPIService'
        );
    }

    /**
     * read the specified APIService
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return APIService|mixed
     */
    public function read($name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiregistration.k8s.io/v1/apiservices/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readApiregistrationV1APIService'
        );
    }

    /**
     * replace the specified APIService
     *
     * @param $name
     * @param APIService $Model
     * @return APIService|mixed
     */
    public function replace($name, \APIService $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apiregistration.k8s.io/v1/apiservices/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceApiregistrationV1APIService'
        );
    }

    /**
     * delete an APIService
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
    public function delete($name, \DeleteOptions $Model, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/apiregistration.k8s.io/v1/apiservices/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteApiregistrationV1APIService'
        );
    }

    /**
     * partially update the specified APIService
     *
     * @param $name
     * @param Patch $Model
     * @return APIService|mixed
     */
    public function patch($name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apiregistration.k8s.io/v1/apiservices/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchApiregistrationV1APIService'
        );
    }

    /**
     * replace status of the specified APIService
     *
     * @param $name
     * @param APIService $Model
     * @return APIService|mixed
     */
    public function replaceStatus($name, \APIService $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apiregistration.k8s.io/v1/apiservices/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceApiregistrationV1APIServiceStatus'
        );
    }

    /**
     * watch individual changes to a list of APIService
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiregistration.k8s.io/v1/watch/apiservices"
        		,[
        		]
        	)
        	, 'watchApiregistrationV1APIServiceList'
        );
    }

    /**
     * watch changes to an object of kind APIService
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiregistration.k8s.io/v1/watch/apiservices/{$name}"
        		,[
        		]
        	)
        	, 'watchApiregistrationV1APIService'
        );
    }

    /**
     * list or watch objects of kind APIService
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
     * @return APIServiceList|mixed
     */
    public function listApiregistrationV1beta1(array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiregistration.k8s.io/v1beta1/apiservices"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listApiregistrationV1beta1APIService'
        );
    }

    /**
     * create an APIService
     *
     * @param APIService $Model
     * @return APIService|mixed
     */
    public function createApiregistrationV1beta1(\APIService $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apiregistration.k8s.io/v1beta1/apiservices"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createApiregistrationV1beta1APIService'
        );
    }

    /**
     * delete collection of APIService
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
    public function deleteCollectionApiregistrationV1beta1(array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/apiregistration.k8s.io/v1beta1/apiservices"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteApiregistrationV1beta1CollectionAPIService'
        );
    }

    /**
     * read the specified APIService
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return APIService|mixed
     */
    public function readApiregistrationV1beta1($name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiregistration.k8s.io/v1beta1/apiservices/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readApiregistrationV1beta1APIService'
        );
    }

    /**
     * replace the specified APIService
     *
     * @param $name
     * @param APIService $Model
     * @return APIService|mixed
     */
    public function replaceApiregistrationV1beta1($name, \APIService $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apiregistration.k8s.io/v1beta1/apiservices/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceApiregistrationV1beta1APIService'
        );
    }

    /**
     * delete an APIService
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
    public function deleteApiregistrationV1beta1($name, \DeleteOptions $Model, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/apiregistration.k8s.io/v1beta1/apiservices/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteApiregistrationV1beta1APIService'
        );
    }

    /**
     * partially update the specified APIService
     *
     * @param $name
     * @param Patch $Model
     * @return APIService|mixed
     */
    public function patchApiregistrationV1beta1($name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apiregistration.k8s.io/v1beta1/apiservices/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchApiregistrationV1beta1APIService'
        );
    }

    /**
     * replace status of the specified APIService
     *
     * @param $name
     * @param APIService $Model
     * @return APIService|mixed
     */
    public function replaceStatusApiregistrationV1beta1($name, \APIService $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apiregistration.k8s.io/v1beta1/apiservices/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceApiregistrationV1beta1APIServiceStatus'
        );
    }

    /**
     * watch individual changes to a list of APIService
     *
     * @return WatchEvent|mixed
     */
    public function watchListApiregistrationV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiregistration.k8s.io/v1beta1/watch/apiservices"
        		,[
        		]
        	)
        	, 'watchApiregistrationV1beta1APIServiceList'
        );
    }

    /**
     * watch changes to an object of kind APIService
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchApiregistrationV1beta1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apiregistration.k8s.io/v1beta1/watch/apiservices/{$name}"
        		,[
        		]
        	)
        	, 'watchApiregistrationV1beta1APIService'
        );
    }


}


<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\PodSecurityPolicyList as PodSecurityPolicyList;
use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\PodSecurityPolicy as ThePodSecurityPolicy;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class PodSecurityPolicy extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind PodSecurityPolicy
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
     * @return PodSecurityPolicyList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/podsecuritypolicies"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listExtensionsV1beta1PodSecurityPolicy'
        );
    }

    /**
     * create a PodSecurityPolicy
     *
     * @param ThePodSecurityPolicy $Model
     * @return ThePodSecurityPolicy|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\PodSecurityPolicy $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/extensions/v1beta1/podsecuritypolicies"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createExtensionsV1beta1PodSecurityPolicy'
        );
    }

    /**
     * delete collection of PodSecurityPolicy
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
        		"/apis/extensions/v1beta1/podsecuritypolicies"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteExtensionsV1beta1CollectionPodSecurityPolicy'
        );
    }

    /**
     * read the specified PodSecurityPolicy
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return ThePodSecurityPolicy|mixed
     */
    public function read($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/podsecuritypolicies/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readExtensionsV1beta1PodSecurityPolicy'
        );
    }

    /**
     * replace the specified PodSecurityPolicy
     *
     * @param $name
     * @param ThePodSecurityPolicy $Model
     * @return ThePodSecurityPolicy|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\PodSecurityPolicy $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/podsecuritypolicies/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceExtensionsV1beta1PodSecurityPolicy'
        );
    }

    /**
     * delete a PodSecurityPolicy
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
        		"/apis/extensions/v1beta1/podsecuritypolicies/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteExtensionsV1beta1PodSecurityPolicy'
        );
    }

    /**
     * partially update the specified PodSecurityPolicy
     *
     * @param $name
     * @param Patch $Model
     * @return ThePodSecurityPolicy|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/podsecuritypolicies/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchExtensionsV1beta1PodSecurityPolicy'
        );
    }

    /**
     * watch individual changes to a list of PodSecurityPolicy
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/podsecuritypolicies"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1PodSecurityPolicyList'
        );
    }

    /**
     * watch changes to an object of kind PodSecurityPolicy
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/podsecuritypolicies/{$name}"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1PodSecurityPolicy'
        );
    }


}


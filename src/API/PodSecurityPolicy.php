<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Policy\V1beta1\PodSecurityPolicyList as PodSecurityPolicyList;
use \Kubernetes\Model\Io\K8s\Api\Policy\V1beta1\PodSecurityPolicy as ThePodSecurityPolicy;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class PodSecurityPolicy extends \KubernetesRuntime\AbstractAPI
{

    /**
     * list or watch objects of kind PodSecurityPolicy
     *
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
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
        		"/apis/policy/v1beta1/podsecuritypolicies"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listPolicyV1beta1PodSecurityPolicy'
        );
    }

    /**
     * create a PodSecurityPolicy
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param ThePodSecurityPolicy $Model
     * @param array $queries
     * @return ThePodSecurityPolicy|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Policy\V1beta1\PodSecurityPolicy $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/policy/v1beta1/podsecuritypolicies"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createPolicyV1beta1PodSecurityPolicy'
        );
    }

    /**
     * delete collection of PodSecurityPolicy
     *
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection(\Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/policy/v1beta1/podsecuritypolicies"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deletePolicyV1beta1CollectionPodSecurityPolicy'
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
        		"/apis/policy/v1beta1/podsecuritypolicies/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readPolicyV1beta1PodSecurityPolicy'
        );
    }

    /**
     * replace the specified PodSecurityPolicy
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param ThePodSecurityPolicy $Model
     * @param array $queries
     * @return ThePodSecurityPolicy|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Policy\V1beta1\PodSecurityPolicy $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/policy/v1beta1/podsecuritypolicies/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replacePolicyV1beta1PodSecurityPolicy'
        );
    }

    /**
     * delete a PodSecurityPolicy
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
     * @return ThePodSecurityPolicy|mixed
     */
    public function delete($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/policy/v1beta1/podsecuritypolicies/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deletePolicyV1beta1PodSecurityPolicy'
        );
    }

    /**
     * partially update the specified PodSecurityPolicy
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
     * @return ThePodSecurityPolicy|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/policy/v1beta1/podsecuritypolicies/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchPolicyV1beta1PodSecurityPolicy'
        );
    }

    /**
     * watch individual changes to a list of PodSecurityPolicy. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/policy/v1beta1/watch/podsecuritypolicies"
        		,[
        		]
        	)
        	, 'watchPolicyV1beta1PodSecurityPolicyList'
        );
    }

    /**
     * watch changes to an object of kind PodSecurityPolicy. deprecated: use the
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
        		"/apis/policy/v1beta1/watch/podsecuritypolicies/{$name}"
        		,[
        		]
        	)
        	, 'watchPolicyV1beta1PodSecurityPolicy'
        );
    }


}


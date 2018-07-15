<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\NetworkPolicy as NetworkPolicy;
use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\NetworkPolicyList as NetworkPolicyList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Networking\V1\NetworkPolicy as NetworkPolicy;
use \Kubernetes\Model\Io\K8s\Api\Networking\V1\NetworkPolicyList as NetworkPolicyList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class NetworkPolicy extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind NetworkPolicy
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
     * @return NetworkPolicyList|mixed
     */
    public function list(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/networkpolicies"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listExtensionsV1beta1NamespacedNetworkPolicy'
        );
    }

    /**
     * create a NetworkPolicy
     *
     * @param string $namespace
     * @param NetworkPolicy $Model
     * @return NetworkPolicy|mixed
     */
    public function create(string $namespace = 'default', \NetworkPolicy $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/networkpolicies"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createExtensionsV1beta1NamespacedNetworkPolicy'
        );
    }

    /**
     * delete collection of NetworkPolicy
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
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/networkpolicies"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteExtensionsV1beta1CollectionNamespacedNetworkPolicy'
        );
    }

    /**
     * read the specified NetworkPolicy
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return NetworkPolicy|mixed
     */
    public function read(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/networkpolicies/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readExtensionsV1beta1NamespacedNetworkPolicy'
        );
    }

    /**
     * replace the specified NetworkPolicy
     *
     * @param string $namespace
     * @param $name
     * @param NetworkPolicy $Model
     * @return NetworkPolicy|mixed
     */
    public function replace(string $namespace = 'default', $name, \NetworkPolicy $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/networkpolicies/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceExtensionsV1beta1NamespacedNetworkPolicy'
        );
    }

    /**
     * delete a NetworkPolicy
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
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/networkpolicies/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteExtensionsV1beta1NamespacedNetworkPolicy'
        );
    }

    /**
     * partially update the specified NetworkPolicy
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return NetworkPolicy|mixed
     */
    public function patch(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/networkpolicies/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchExtensionsV1beta1NamespacedNetworkPolicy'
        );
    }

    /**
     * list or watch objects of kind NetworkPolicy
     *
     * @return NetworkPolicyList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/networkpolicies"
        		,[
        		]
        	)
        	, 'listExtensionsV1beta1NetworkPolicyForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of NetworkPolicy
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchList(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/namespaces/{$namespace}/networkpolicies"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1NamespacedNetworkPolicyList'
        );
    }

    /**
     * watch changes to an object of kind NetworkPolicy
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/namespaces/{$namespace}/networkpolicies/{$name}"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1NamespacedNetworkPolicy'
        );
    }

    /**
     * watch individual changes to a list of NetworkPolicy
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/networkpolicies"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1NetworkPolicyListForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind NetworkPolicy
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
     * @return NetworkPolicyList|mixed
     */
    public function listNetworkingV1(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/namespaces/{$namespace}/networkpolicies"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listNetworkingV1NamespacedNetworkPolicy'
        );
    }

    /**
     * create a NetworkPolicy
     *
     * @param string $namespace
     * @param NetworkPolicy $Model
     * @return NetworkPolicy|mixed
     */
    public function createNetworkingV1(string $namespace = 'default', \NetworkPolicy $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/networking.k8s.io/v1/namespaces/{$namespace}/networkpolicies"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createNetworkingV1NamespacedNetworkPolicy'
        );
    }

    /**
     * delete collection of NetworkPolicy
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
    public function deleteCollectionNetworkingV1(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/networking.k8s.io/v1/namespaces/{$namespace}/networkpolicies"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteNetworkingV1CollectionNamespacedNetworkPolicy'
        );
    }

    /**
     * read the specified NetworkPolicy
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return NetworkPolicy|mixed
     */
    public function readNetworkingV1(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/namespaces/{$namespace}/networkpolicies/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readNetworkingV1NamespacedNetworkPolicy'
        );
    }

    /**
     * replace the specified NetworkPolicy
     *
     * @param string $namespace
     * @param $name
     * @param NetworkPolicy $Model
     * @return NetworkPolicy|mixed
     */
    public function replaceNetworkingV1(string $namespace = 'default', $name, \NetworkPolicy $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/networking.k8s.io/v1/namespaces/{$namespace}/networkpolicies/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceNetworkingV1NamespacedNetworkPolicy'
        );
    }

    /**
     * delete a NetworkPolicy
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
    public function deleteNetworkingV1(string $namespace = 'default', $name, \DeleteOptions $Model, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/networking.k8s.io/v1/namespaces/{$namespace}/networkpolicies/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteNetworkingV1NamespacedNetworkPolicy'
        );
    }

    /**
     * partially update the specified NetworkPolicy
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return NetworkPolicy|mixed
     */
    public function patchNetworkingV1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/networking.k8s.io/v1/namespaces/{$namespace}/networkpolicies/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchNetworkingV1NamespacedNetworkPolicy'
        );
    }

    /**
     * list or watch objects of kind NetworkPolicy
     *
     * @return NetworkPolicyList|mixed
     */
    public function listForAllNamespacesNetworkingV1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/networkpolicies"
        		,[
        		]
        	)
        	, 'listNetworkingV1NetworkPolicyForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of NetworkPolicy
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchListNetworkingV1(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/watch/namespaces/{$namespace}/networkpolicies"
        		,[
        		]
        	)
        	, 'watchNetworkingV1NamespacedNetworkPolicyList'
        );
    }

    /**
     * watch changes to an object of kind NetworkPolicy
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchNetworkingV1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/watch/namespaces/{$namespace}/networkpolicies/{$name}"
        		,[
        		]
        	)
        	, 'watchNetworkingV1NamespacedNetworkPolicy'
        );
    }

    /**
     * watch individual changes to a list of NetworkPolicy
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesNetworkingV1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/watch/networkpolicies"
        		,[
        		]
        	)
        	, 'watchNetworkingV1NetworkPolicyListForAllNamespaces'
        );
    }


}


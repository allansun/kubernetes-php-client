<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\NetworkPolicyList as NetworkPolicyList;
use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\NetworkPolicy as TheNetworkPolicy;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Networking\V1\NetworkPolicyList as NetworkPolicyListV1;
use \Kubernetes\Model\Io\K8s\Api\Networking\V1\NetworkPolicy as TheNetworkPolicyV1;

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
     * @param $namespace
     * @param array $queries
     * @return NetworkPolicyList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
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
     * @param $namespace
     * @param TheNetworkPolicy $Model
     * @return TheNetworkPolicy|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\NetworkPolicy $Model)
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
     * @param $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection($namespace = 'default', array $queries = [])
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
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheNetworkPolicy|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
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
     * @param $namespace
     * @param $name
     * @param TheNetworkPolicy $Model
     * @return TheNetworkPolicy|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\NetworkPolicy $Model)
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheNetworkPolicy|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * watch individual changes to a list of NetworkPolicy. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
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
     * watch changes to an object of kind NetworkPolicy. deprecated: use the 'watch'
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
        		"/apis/extensions/v1beta1/watch/namespaces/{$namespace}/networkpolicies/{$name}"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1NamespacedNetworkPolicy'
        );
    }

    /**
     * watch individual changes to a list of NetworkPolicy. deprecated: use the 'watch'
     * parameter with a list operation instead.
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
     * @param $namespace
     * @param array $queries
     * @return NetworkPolicyListV1|mixed
     */
    public function listNetworkingV1($namespace = 'default', array $queries = [])
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
     * @param $namespace
     * @param TheNetworkPolicyV1 $Model
     * @return TheNetworkPolicyV1|mixed
     */
    public function createNetworkingV1($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Networking\V1\NetworkPolicy $Model)
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
     * @param $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollectionNetworkingV1($namespace = 'default', array $queries = [])
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
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheNetworkPolicyV1|mixed
     */
    public function readNetworkingV1($namespace = 'default', $name, array $queries = [])
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
     * @param $namespace
     * @param $name
     * @param TheNetworkPolicyV1 $Model
     * @return TheNetworkPolicyV1|mixed
     */
    public function replaceNetworkingV1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Networking\V1\NetworkPolicy $Model)
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
    public function deleteNetworkingV1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheNetworkPolicyV1|mixed
     */
    public function patchNetworkingV1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * @return NetworkPolicyListV1|mixed
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
     * watch individual changes to a list of NetworkPolicy. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchListNetworkingV1($namespace = 'default')
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
     * watch changes to an object of kind NetworkPolicy. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchNetworkingV1($namespace = 'default', $name)
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
     * watch individual changes to a list of NetworkPolicy. deprecated: use the 'watch'
     * parameter with a list operation instead.
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


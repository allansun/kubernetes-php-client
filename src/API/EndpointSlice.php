<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Discovery\V1beta1\EndpointSliceList as EndpointSliceList;
use \Kubernetes\Model\Io\K8s\Api\Discovery\V1beta1\EndpointSlice as TheEndpointSlice;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class EndpointSlice extends \KubernetesRuntime\AbstractAPI
{

    /**
     * list or watch objects of kind EndpointSlice
     *
     * @return EndpointSliceList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/discovery.k8s.io/v1beta1/endpointslices"
        		,[
        		]
        	)
        	, 'listDiscoveryV1beta1EndpointSliceForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind EndpointSlice
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
     * @param $namespace
     * @param array $queries
     * @return EndpointSliceList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/discovery.k8s.io/v1beta1/namespaces/{$namespace}/endpointslices"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listDiscoveryV1beta1NamespacedEndpointSlice'
        );
    }

    /**
     * create an EndpointSlice
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param TheEndpointSlice $Model
     * @param array $queries
     * @return TheEndpointSlice|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Discovery\V1beta1\EndpointSlice $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/discovery.k8s.io/v1beta1/namespaces/{$namespace}/endpointslices"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createDiscoveryV1beta1NamespacedEndpointSlice'
        );
    }

    /**
     * delete collection of EndpointSlice
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
     * @param $namespace
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection($namespace = 'default', \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/discovery.k8s.io/v1beta1/namespaces/{$namespace}/endpointslices"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteDiscoveryV1beta1CollectionNamespacedEndpointSlice'
        );
    }

    /**
     * read the specified EndpointSlice
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheEndpointSlice|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/discovery.k8s.io/v1beta1/namespaces/{$namespace}/endpointslices/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readDiscoveryV1beta1NamespacedEndpointSlice'
        );
    }

    /**
     * replace the specified EndpointSlice
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param $name
     * @param TheEndpointSlice $Model
     * @param array $queries
     * @return TheEndpointSlice|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Discovery\V1beta1\EndpointSlice $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/discovery.k8s.io/v1beta1/namespaces/{$namespace}/endpointslices/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceDiscoveryV1beta1NamespacedEndpointSlice'
        );
    }

    /**
     * delete an EndpointSlice
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
        		"/apis/discovery.k8s.io/v1beta1/namespaces/{$namespace}/endpointslices/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteDiscoveryV1beta1NamespacedEndpointSlice'
        );
    }

    /**
     * partially update the specified EndpointSlice
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheEndpointSlice|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/discovery.k8s.io/v1beta1/namespaces/{$namespace}/endpointslices/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchDiscoveryV1beta1NamespacedEndpointSlice'
        );
    }

    /**
     * watch individual changes to a list of EndpointSlice. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/discovery.k8s.io/v1beta1/watch/endpointslices"
        		,[
        		]
        	)
        	, 'watchDiscoveryV1beta1EndpointSliceListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of EndpointSlice. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/discovery.k8s.io/v1beta1/watch/namespaces/{$namespace}/endpointslices"
        		,[
        		]
        	)
        	, 'watchDiscoveryV1beta1NamespacedEndpointSliceList'
        );
    }

    /**
     * watch changes to an object of kind EndpointSlice. deprecated: use the 'watch'
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
        		"/apis/discovery.k8s.io/v1beta1/watch/namespaces/{$namespace}/endpointslices/{$name}"
        		,[
        		]
        	)
        	, 'watchDiscoveryV1beta1NamespacedEndpointSlice'
        );
    }


}


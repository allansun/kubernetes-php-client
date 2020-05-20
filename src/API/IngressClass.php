<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Networking\V1beta1\IngressClassList as IngressClassList;
use \Kubernetes\Model\Io\K8s\Api\Networking\V1beta1\IngressClass as TheIngressClass;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class IngressClass extends \KubernetesRuntime\AbstractAPI
{

    /**
     * list or watch objects of kind IngressClass
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
     * @return IngressClassList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1beta1/ingressclasses"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listNetworkingV1beta1IngressClass'
        );
    }

    /**
     * create an IngressClass
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param TheIngressClass $Model
     * @param array $queries
     * @return TheIngressClass|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Networking\V1beta1\IngressClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/networking.k8s.io/v1beta1/ingressclasses"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createNetworkingV1beta1IngressClass'
        );
    }

    /**
     * delete collection of IngressClass
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
     * @configkey timeoutSeconds	integer
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection(\Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/networking.k8s.io/v1beta1/ingressclasses"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteNetworkingV1beta1CollectionIngressClass'
        );
    }

    /**
     * read the specified IngressClass
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheIngressClass|mixed
     */
    public function read($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1beta1/ingressclasses/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readNetworkingV1beta1IngressClass'
        );
    }

    /**
     * replace the specified IngressClass
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheIngressClass $Model
     * @param array $queries
     * @return TheIngressClass|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Networking\V1beta1\IngressClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/networking.k8s.io/v1beta1/ingressclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceNetworkingV1beta1IngressClass'
        );
    }

    /**
     * delete an IngressClass
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
        		"/apis/networking.k8s.io/v1beta1/ingressclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteNetworkingV1beta1IngressClass'
        );
    }

    /**
     * partially update the specified IngressClass
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
     * @return TheIngressClass|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/networking.k8s.io/v1beta1/ingressclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchNetworkingV1beta1IngressClass'
        );
    }

    /**
     * watch individual changes to a list of IngressClass. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1beta1/watch/ingressclasses"
        		,[
        		]
        	)
        	, 'watchNetworkingV1beta1IngressClassList'
        );
    }

    /**
     * watch changes to an object of kind IngressClass. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1beta1/watch/ingressclasses/{$name}"
        		,[
        		]
        	)
        	, 'watchNetworkingV1beta1IngressClass'
        );
    }


}


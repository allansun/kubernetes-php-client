<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Coordination\V1\LeaseList as LeaseList;
use \Kubernetes\Model\Io\K8s\Api\Coordination\V1\Lease as TheLease;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Coordination\V1beta1\LeaseList as LeaseListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Coordination\V1beta1\Lease as TheLeaseV1beta1;

class Lease extends \KubernetesRuntime\AbstractAPI
{

    /**
     * list or watch objects of kind Lease
     *
     * @return LeaseList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1/leases"
        		,[
        		]
        	)
        	, 'listCoordinationV1LeaseForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Lease
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param $namespace
     * @param array $queries
     * @return LeaseList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1/namespaces/{$namespace}/leases"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listCoordinationV1NamespacedLease'
        );
    }

    /**
     * create a Lease
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param TheLease $Model
     * @param array $queries
     * @return TheLease|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Coordination\V1\Lease $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/coordination.k8s.io/v1/namespaces/{$namespace}/leases"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createCoordinationV1NamespacedLease'
        );
    }

    /**
     * delete collection of Lease
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
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
        		"/apis/coordination.k8s.io/v1/namespaces/{$namespace}/leases"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoordinationV1CollectionNamespacedLease'
        );
    }

    /**
     * read the specified Lease
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheLease|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1/namespaces/{$namespace}/leases/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readCoordinationV1NamespacedLease'
        );
    }

    /**
     * replace the specified Lease
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param $name
     * @param TheLease $Model
     * @param array $queries
     * @return TheLease|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Coordination\V1\Lease $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/coordination.k8s.io/v1/namespaces/{$namespace}/leases/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceCoordinationV1NamespacedLease'
        );
    }

    /**
     * delete a Lease
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
        		"/apis/coordination.k8s.io/v1/namespaces/{$namespace}/leases/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoordinationV1NamespacedLease'
        );
    }

    /**
     * partially update the specified Lease
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
     * @return TheLease|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/coordination.k8s.io/v1/namespaces/{$namespace}/leases/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchCoordinationV1NamespacedLease'
        );
    }

    /**
     * watch individual changes to a list of Lease. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1/watch/leases"
        		,[
        		]
        	)
        	, 'watchCoordinationV1LeaseListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Lease. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1/watch/namespaces/{$namespace}/leases"
        		,[
        		]
        	)
        	, 'watchCoordinationV1NamespacedLeaseList'
        );
    }

    /**
     * watch changes to an object of kind Lease. deprecated: use the 'watch' parameter
     * with a list operation instead, filtered to a single item with the
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
        		"/apis/coordination.k8s.io/v1/watch/namespaces/{$namespace}/leases/{$name}"
        		,[
        		]
        	)
        	, 'watchCoordinationV1NamespacedLease'
        );
    }

    /**
     * list or watch objects of kind Lease
     *
     * @return LeaseListV1beta1|mixed
     */
    public function listForAllNamespacesCoordinationV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1beta1/leases"
        		,[
        		]
        	)
        	, 'listCoordinationV1beta1LeaseForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Lease
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param $namespace
     * @param array $queries
     * @return LeaseListV1beta1|mixed
     */
    public function listCoordinationV1beta1($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1beta1/namespaces/{$namespace}/leases"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listCoordinationV1beta1NamespacedLease'
        );
    }

    /**
     * create a Lease
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param TheLeaseV1beta1 $Model
     * @param array $queries
     * @return TheLeaseV1beta1|mixed
     */
    public function createCoordinationV1beta1($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Coordination\V1beta1\Lease $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/coordination.k8s.io/v1beta1/namespaces/{$namespace}/leases"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createCoordinationV1beta1NamespacedLease'
        );
    }

    /**
     * delete collection of Lease
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollectionCoordinationV1beta1($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/coordination.k8s.io/v1beta1/namespaces/{$namespace}/leases"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoordinationV1beta1CollectionNamespacedLease'
        );
    }

    /**
     * read the specified Lease
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheLeaseV1beta1|mixed
     */
    public function readCoordinationV1beta1($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1beta1/namespaces/{$namespace}/leases/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readCoordinationV1beta1NamespacedLease'
        );
    }

    /**
     * replace the specified Lease
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param $name
     * @param TheLeaseV1beta1 $Model
     * @param array $queries
     * @return TheLeaseV1beta1|mixed
     */
    public function replaceCoordinationV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Coordination\V1beta1\Lease $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/coordination.k8s.io/v1beta1/namespaces/{$namespace}/leases/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceCoordinationV1beta1NamespacedLease'
        );
    }

    /**
     * delete a Lease
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
    public function deleteCoordinationV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/coordination.k8s.io/v1beta1/namespaces/{$namespace}/leases/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoordinationV1beta1NamespacedLease'
        );
    }

    /**
     * partially update the specified Lease
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
     * @return TheLeaseV1beta1|mixed
     */
    public function patchCoordinationV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/coordination.k8s.io/v1beta1/namespaces/{$namespace}/leases/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchCoordinationV1beta1NamespacedLease'
        );
    }

    /**
     * watch individual changes to a list of Lease. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesCoordinationV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1beta1/watch/leases"
        		,[
        		]
        	)
        	, 'watchCoordinationV1beta1LeaseListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Lease. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchListCoordinationV1beta1($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1beta1/watch/namespaces/{$namespace}/leases"
        		,[
        		]
        	)
        	, 'watchCoordinationV1beta1NamespacedLeaseList'
        );
    }

    /**
     * watch changes to an object of kind Lease. deprecated: use the 'watch' parameter
     * with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchCoordinationV1beta1($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1beta1/watch/namespaces/{$namespace}/leases/{$name}"
        		,[
        		]
        	)
        	, 'watchCoordinationV1beta1NamespacedLease'
        );
    }


}


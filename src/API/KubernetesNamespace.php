<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Core\V1\NamespaceList as NamespaceList;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\KubernetesNamespace as TheKubernetesNamespace;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class KubernetesNamespace extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind Namespace
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
     * @return NamespaceList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listCoreV1Namespace'
        );
    }

    /**
     * create a Namespace
     *
     * @param TheKubernetesNamespace $Model
     * @return TheKubernetesNamespace|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Core\V1\KubernetesNamespace $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createCoreV1Namespace'
        );
    }

    /**
     * read the specified Namespace
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheKubernetesNamespace|mixed
     */
    public function read($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readCoreV1Namespace'
        );
    }

    /**
     * replace the specified Namespace
     *
     * @param $name
     * @param TheKubernetesNamespace $Model
     * @return TheKubernetesNamespace|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Core\V1\KubernetesNamespace $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1Namespace'
        );
    }

    /**
     * delete a Namespace
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
        		"/api/v1/namespaces/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1Namespace'
        );
    }

    /**
     * partially update the specified Namespace
     *
     * @param $name
     * @param Patch $Model
     * @return TheKubernetesNamespace|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchCoreV1Namespace'
        );
    }

    /**
     * replace finalize of the specified Namespace
     *
     * @param $name
     * @param TheKubernetesNamespace $Model
     * @return TheKubernetesNamespace|mixed
     */
    public function replaceFinalize($name, \Kubernetes\Model\Io\K8s\Api\Core\V1\KubernetesNamespace $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$name}/finalize"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1NamespaceFinalize'
        );
    }

    /**
     * read status of the specified Namespace
     *
     * @param $name
     * @return TheKubernetesNamespace|mixed
     */
    public function readStatus($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$name}/status"
        		,[
        		]
        	)
        	, 'readCoreV1NamespaceStatus'
        );
    }

    /**
     * replace status of the specified Namespace
     *
     * @param $name
     * @param TheKubernetesNamespace $Model
     * @return TheKubernetesNamespace|mixed
     */
    public function replaceStatus($name, \Kubernetes\Model\Io\K8s\Api\Core\V1\KubernetesNamespace $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1NamespaceStatus'
        );
    }

    /**
     * partially update status of the specified Namespace
     *
     * @param $name
     * @param Patch $Model
     * @return TheKubernetesNamespace|mixed
     */
    public function patchStatus($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchCoreV1NamespaceStatus'
        );
    }

    /**
     * watch individual changes to a list of Namespace. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespaceList'
        );
    }

    /**
     * watch changes to an object of kind Namespace. deprecated: use the 'watch'
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
        		"/api/v1/watch/namespaces/{$name}"
        		,[
        		]
        	)
        	, 'watchCoreV1Namespace'
        );
    }


}


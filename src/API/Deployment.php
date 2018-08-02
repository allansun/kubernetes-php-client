<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Apps\V1\DeploymentList as DeploymentList;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1\Deployment as TheDeployment;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\DeploymentList as DeploymentListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\Deployment as TheDeploymentV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\DeploymentList as DeploymentListV1beta2;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\Deployment as TheDeploymentV1beta2;
use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\DeploymentList as DeploymentListV1beta1Extensions;
use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\Deployment as TheDeploymentV1beta1Extensions;

class Deployment extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind Deployment
     *
     * @return DeploymentList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/deployments"
        		,[
        		]
        	)
        	, 'listAppsV1DeploymentForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Deployment
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
     * @return DeploymentList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAppsV1NamespacedDeployment'
        );
    }

    /**
     * create a Deployment
     *
     * @param $namespace
     * @param TheDeployment $Model
     * @return TheDeployment|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Apps\V1\Deployment $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAppsV1NamespacedDeployment'
        );
    }

    /**
     * delete collection of Deployment
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
        		"/apis/apps/v1/namespaces/{$namespace}/deployments"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1CollectionNamespacedDeployment'
        );
    }

    /**
     * read the specified Deployment
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheDeployment|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAppsV1NamespacedDeployment'
        );
    }

    /**
     * replace the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @param TheDeployment $Model
     * @return TheDeployment|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1\Deployment $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1NamespacedDeployment'
        );
    }

    /**
     * delete a Deployment
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
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
        		"/apis/apps/v1/namespaces/{$namespace}/deployments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1NamespacedDeployment'
        );
    }

    /**
     * partially update the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheDeployment|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1NamespacedDeployment'
        );
    }

    /**
     * read status of the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @return TheDeployment|mixed
     */
    public function readStatus($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments/{$name}/status"
        		,[
        		]
        	)
        	, 'readAppsV1NamespacedDeploymentStatus'
        );
    }

    /**
     * replace status of the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @param TheDeployment $Model
     * @return TheDeployment|mixed
     */
    public function replaceStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1\Deployment $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1NamespacedDeploymentStatus'
        );
    }

    /**
     * partially update status of the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheDeployment|mixed
     */
    public function patchStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1NamespacedDeploymentStatus'
        );
    }

    /**
     * watch individual changes to a list of Deployment
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/watch/deployments"
        		,[
        		]
        	)
        	, 'watchAppsV1DeploymentListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Deployment
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/watch/namespaces/{$namespace}/deployments"
        		,[
        		]
        	)
        	, 'watchAppsV1NamespacedDeploymentList'
        );
    }

    /**
     * watch changes to an object of kind Deployment
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/watch/namespaces/{$namespace}/deployments/{$name}"
        		,[
        		]
        	)
        	, 'watchAppsV1NamespacedDeployment'
        );
    }

    /**
     * list or watch objects of kind Deployment
     *
     * @return DeploymentListV1beta1|mixed
     */
    public function listForAllNamespacesAppsV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/deployments"
        		,[
        		]
        	)
        	, 'listAppsV1beta1DeploymentForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Deployment
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
     * @return DeploymentListV1beta1|mixed
     */
    public function listAppsV1beta1($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/deployments"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAppsV1beta1NamespacedDeployment'
        );
    }

    /**
     * create a Deployment
     *
     * @param $namespace
     * @param TheDeploymentV1beta1 $Model
     * @return TheDeploymentV1beta1|mixed
     */
    public function createAppsV1beta1($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\Deployment $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/deployments"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAppsV1beta1NamespacedDeployment'
        );
    }

    /**
     * delete collection of Deployment
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
    public function deleteCollectionAppsV1beta1($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/deployments"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1beta1CollectionNamespacedDeployment'
        );
    }

    /**
     * read the specified Deployment
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheDeploymentV1beta1|mixed
     */
    public function readAppsV1beta1($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/deployments/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAppsV1beta1NamespacedDeployment'
        );
    }

    /**
     * replace the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @param TheDeploymentV1beta1 $Model
     * @return TheDeploymentV1beta1|mixed
     */
    public function replaceAppsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\Deployment $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/deployments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta1NamespacedDeployment'
        );
    }

    /**
     * delete a Deployment
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $namespace
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteAppsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/deployments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1beta1NamespacedDeployment'
        );
    }

    /**
     * partially update the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheDeploymentV1beta1|mixed
     */
    public function patchAppsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/deployments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta1NamespacedDeployment'
        );
    }

    /**
     * read status of the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @return TheDeploymentV1beta1|mixed
     */
    public function readStatusAppsV1beta1($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/deployments/{$name}/status"
        		,[
        		]
        	)
        	, 'readAppsV1beta1NamespacedDeploymentStatus'
        );
    }

    /**
     * replace status of the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @param TheDeploymentV1beta1 $Model
     * @return TheDeploymentV1beta1|mixed
     */
    public function replaceStatusAppsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\Deployment $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/deployments/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta1NamespacedDeploymentStatus'
        );
    }

    /**
     * partially update status of the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheDeploymentV1beta1|mixed
     */
    public function patchStatusAppsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/deployments/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta1NamespacedDeploymentStatus'
        );
    }

    /**
     * watch individual changes to a list of Deployment
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesAppsV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/watch/deployments"
        		,[
        		]
        	)
        	, 'watchAppsV1beta1DeploymentListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Deployment
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchListAppsV1beta1($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/watch/namespaces/{$namespace}/deployments"
        		,[
        		]
        	)
        	, 'watchAppsV1beta1NamespacedDeploymentList'
        );
    }

    /**
     * watch changes to an object of kind Deployment
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchAppsV1beta1($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/watch/namespaces/{$namespace}/deployments/{$name}"
        		,[
        		]
        	)
        	, 'watchAppsV1beta1NamespacedDeployment'
        );
    }

    /**
     * list or watch objects of kind Deployment
     *
     * @return DeploymentListV1beta2|mixed
     */
    public function listForAllNamespacesAppsV1beta2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/deployments"
        		,[
        		]
        	)
        	, 'listAppsV1beta2DeploymentForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Deployment
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
     * @return DeploymentListV1beta2|mixed
     */
    public function listAppsV1beta2($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/deployments"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAppsV1beta2NamespacedDeployment'
        );
    }

    /**
     * create a Deployment
     *
     * @param $namespace
     * @param TheDeploymentV1beta2 $Model
     * @return TheDeploymentV1beta2|mixed
     */
    public function createAppsV1beta2($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\Deployment $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/deployments"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAppsV1beta2NamespacedDeployment'
        );
    }

    /**
     * delete collection of Deployment
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
    public function deleteCollectionAppsV1beta2($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/deployments"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1beta2CollectionNamespacedDeployment'
        );
    }

    /**
     * read the specified Deployment
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheDeploymentV1beta2|mixed
     */
    public function readAppsV1beta2($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/deployments/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAppsV1beta2NamespacedDeployment'
        );
    }

    /**
     * replace the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @param TheDeploymentV1beta2 $Model
     * @return TheDeploymentV1beta2|mixed
     */
    public function replaceAppsV1beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\Deployment $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/deployments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta2NamespacedDeployment'
        );
    }

    /**
     * delete a Deployment
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $namespace
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteAppsV1beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/deployments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1beta2NamespacedDeployment'
        );
    }

    /**
     * partially update the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheDeploymentV1beta2|mixed
     */
    public function patchAppsV1beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/deployments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta2NamespacedDeployment'
        );
    }

    /**
     * read status of the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @return TheDeploymentV1beta2|mixed
     */
    public function readStatusAppsV1beta2($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/deployments/{$name}/status"
        		,[
        		]
        	)
        	, 'readAppsV1beta2NamespacedDeploymentStatus'
        );
    }

    /**
     * replace status of the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @param TheDeploymentV1beta2 $Model
     * @return TheDeploymentV1beta2|mixed
     */
    public function replaceStatusAppsV1beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\Deployment $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/deployments/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta2NamespacedDeploymentStatus'
        );
    }

    /**
     * partially update status of the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheDeploymentV1beta2|mixed
     */
    public function patchStatusAppsV1beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/deployments/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta2NamespacedDeploymentStatus'
        );
    }

    /**
     * watch individual changes to a list of Deployment
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesAppsV1beta2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/watch/deployments"
        		,[
        		]
        	)
        	, 'watchAppsV1beta2DeploymentListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Deployment
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchListAppsV1beta2($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/watch/namespaces/{$namespace}/deployments"
        		,[
        		]
        	)
        	, 'watchAppsV1beta2NamespacedDeploymentList'
        );
    }

    /**
     * watch changes to an object of kind Deployment
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchAppsV1beta2($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/watch/namespaces/{$namespace}/deployments/{$name}"
        		,[
        		]
        	)
        	, 'watchAppsV1beta2NamespacedDeployment'
        );
    }

    /**
     * list or watch objects of kind Deployment
     *
     * @return DeploymentListV1beta1Extensions|mixed
     */
    public function listForAllNamespacesExtensionsV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/deployments"
        		,[
        		]
        	)
        	, 'listExtensionsV1beta1DeploymentForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Deployment
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
     * @return DeploymentListV1beta1Extensions|mixed
     */
    public function listExtensionsV1beta1($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/deployments"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listExtensionsV1beta1NamespacedDeployment'
        );
    }

    /**
     * create a Deployment
     *
     * @param $namespace
     * @param TheDeploymentV1beta1Extensions $Model
     * @return TheDeploymentV1beta1Extensions|mixed
     */
    public function createExtensionsV1beta1($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\Deployment $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/deployments"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createExtensionsV1beta1NamespacedDeployment'
        );
    }

    /**
     * delete collection of Deployment
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
    public function deleteCollectionExtensionsV1beta1($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/deployments"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteExtensionsV1beta1CollectionNamespacedDeployment'
        );
    }

    /**
     * read the specified Deployment
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheDeploymentV1beta1Extensions|mixed
     */
    public function readExtensionsV1beta1($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/deployments/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readExtensionsV1beta1NamespacedDeployment'
        );
    }

    /**
     * replace the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @param TheDeploymentV1beta1Extensions $Model
     * @return TheDeploymentV1beta1Extensions|mixed
     */
    public function replaceExtensionsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\Deployment $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/deployments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceExtensionsV1beta1NamespacedDeployment'
        );
    }

    /**
     * delete a Deployment
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $namespace
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteExtensionsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/deployments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteExtensionsV1beta1NamespacedDeployment'
        );
    }

    /**
     * partially update the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheDeploymentV1beta1Extensions|mixed
     */
    public function patchExtensionsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/deployments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchExtensionsV1beta1NamespacedDeployment'
        );
    }

    /**
     * read status of the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @return TheDeploymentV1beta1Extensions|mixed
     */
    public function readStatusExtensionsV1beta1($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/deployments/{$name}/status"
        		,[
        		]
        	)
        	, 'readExtensionsV1beta1NamespacedDeploymentStatus'
        );
    }

    /**
     * replace status of the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @param TheDeploymentV1beta1Extensions $Model
     * @return TheDeploymentV1beta1Extensions|mixed
     */
    public function replaceStatusExtensionsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\Deployment $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/deployments/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceExtensionsV1beta1NamespacedDeploymentStatus'
        );
    }

    /**
     * partially update status of the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheDeploymentV1beta1Extensions|mixed
     */
    public function patchStatusExtensionsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/deployments/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchExtensionsV1beta1NamespacedDeploymentStatus'
        );
    }

    /**
     * watch individual changes to a list of Deployment
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesExtensionsV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/deployments"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1DeploymentListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Deployment
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchListExtensionsV1beta1($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/namespaces/{$namespace}/deployments"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1NamespacedDeploymentList'
        );
    }

    /**
     * watch changes to an object of kind Deployment
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchExtensionsV1beta1($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/namespaces/{$namespace}/deployments/{$name}"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1NamespacedDeployment'
        );
    }


}


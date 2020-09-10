<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Apps\V1\DeploymentList as DeploymentList;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1\Deployment as TheDeployment;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class Deployment extends \KubernetesRuntime\AbstractAPI
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
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey resourceVersionMatch	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey resourceVersionMatch	string
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
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param TheDeployment $Model
     * @param array $queries
     * @return TheDeployment|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Apps\V1\Deployment $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createAppsV1NamespacedDeployment'
        );
    }

    /**
     * delete collection of Deployment
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
     * @configkey resourceVersionMatch	string
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
     * @configkey resourceVersionMatch	string
     * @configkey timeoutSeconds	integer
     * @param $namespace
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection($namespace = 'default', \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments"
        		,[
        			'json' => $Model->getArrayCopy(),
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
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param $name
     * @param TheDeployment $Model
     * @param array $queries
     * @return TheDeployment|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1\Deployment $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAppsV1NamespacedDeployment'
        );
    }

    /**
     * delete a Deployment
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
     * @return TheDeployment|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
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
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param $name
     * @param TheDeployment $Model
     * @param array $queries
     * @return TheDeployment|mixed
     */
    public function replaceStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1\Deployment $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAppsV1NamespacedDeploymentStatus'
        );
    }

    /**
     * partially update status of the specified Deployment
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
     * @return TheDeployment|mixed
     */
    public function patchStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAppsV1NamespacedDeploymentStatus'
        );
    }

    /**
     * watch individual changes to a list of Deployment. deprecated: use the 'watch'
     * parameter with a list operation instead.
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
     * watch individual changes to a list of Deployment. deprecated: use the 'watch'
     * parameter with a list operation instead.
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
     * watch changes to an object of kind Deployment. deprecated: use the 'watch'
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
        		"/apis/apps/v1/watch/namespaces/{$namespace}/deployments/{$name}"
        		,[
        		]
        	)
        	, 'watchAppsV1NamespacedDeployment'
        );
    }


}


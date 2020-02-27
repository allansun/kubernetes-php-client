<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\Scale as TheScale;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;

class Scale extends \KubernetesRuntime\AbstractAPI
{

    /**
     * read scale of the specified ReplicationController
     *
     * @param $namespace
     * @param $name
     * @return TheScale|mixed
     */
    public function readReplicationController($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/replicationcontrollers/{$name}/scale"
        		,[
        		]
        	)
        	, 'readCoreV1NamespacedReplicationControllerScale'
        );
    }

    /**
     * replace scale of the specified ReplicationController
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param $name
     * @param TheScale $Model
     * @param array $queries
     * @return TheScale|mixed
     */
    public function replaceReplicationController($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\Scale $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/replicationcontrollers/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceCoreV1NamespacedReplicationControllerScale'
        );
    }

    /**
     * partially update scale of the specified ReplicationController
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
     * @return TheScale|mixed
     */
    public function patchReplicationController($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/replicationcontrollers/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchCoreV1NamespacedReplicationControllerScale'
        );
    }

    /**
     * read scale of the specified Deployment
     *
     * @param $namespace
     * @param $name
     * @return TheScale|mixed
     */
    public function readDeployment($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments/{$name}/scale"
        		,[
        		]
        	)
        	, 'readAppsV1NamespacedDeploymentScale'
        );
    }

    /**
     * replace scale of the specified Deployment
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param $name
     * @param TheScale $Model
     * @param array $queries
     * @return TheScale|mixed
     */
    public function replaceDeployment($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\Scale $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAppsV1NamespacedDeploymentScale'
        );
    }

    /**
     * partially update scale of the specified Deployment
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
     * @return TheScale|mixed
     */
    public function patchDeployment($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAppsV1NamespacedDeploymentScale'
        );
    }

    /**
     * read scale of the specified ReplicaSet
     *
     * @param $namespace
     * @param $name
     * @return TheScale|mixed
     */
    public function readReplicaSet($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets/{$name}/scale"
        		,[
        		]
        	)
        	, 'readAppsV1NamespacedReplicaSetScale'
        );
    }

    /**
     * replace scale of the specified ReplicaSet
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param $name
     * @param TheScale $Model
     * @param array $queries
     * @return TheScale|mixed
     */
    public function replaceReplicaSet($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\Scale $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAppsV1NamespacedReplicaSetScale'
        );
    }

    /**
     * partially update scale of the specified ReplicaSet
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
     * @return TheScale|mixed
     */
    public function patchReplicaSet($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAppsV1NamespacedReplicaSetScale'
        );
    }

    /**
     * read scale of the specified StatefulSet
     *
     * @param $namespace
     * @param $name
     * @return TheScale|mixed
     */
    public function readStatefulSet($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets/{$name}/scale"
        		,[
        		]
        	)
        	, 'readAppsV1NamespacedStatefulSetScale'
        );
    }

    /**
     * replace scale of the specified StatefulSet
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param $name
     * @param TheScale $Model
     * @param array $queries
     * @return TheScale|mixed
     */
    public function replaceStatefulSet($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\Scale $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAppsV1NamespacedStatefulSetScale'
        );
    }

    /**
     * partially update scale of the specified StatefulSet
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
     * @return TheScale|mixed
     */
    public function patchStatefulSet($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAppsV1NamespacedStatefulSetScale'
        );
    }


}


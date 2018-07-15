<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\Scale as Scale;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\Scale as Scale;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\Scale as Scale;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\Scale as Scale;

class Scale extends \Kubernetes\AbstractAPI
{

    /**
     * read scale of the specified ReplicationController
     *
     * @param string $namespace
     * @param $name
     * @return Scale|mixed
     */
    public function readReplicationController(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @param Scale $Model
     * @return Scale|mixed
     */
    public function replaceReplicationController(string $namespace = 'default', $name, \Scale $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/replicationcontrollers/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1NamespacedReplicationControllerScale'
        );
    }

    /**
     * partially update scale of the specified ReplicationController
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Scale|mixed
     */
    public function patchReplicationController(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/replicationcontrollers/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchCoreV1NamespacedReplicationControllerScale'
        );
    }

    /**
     * read scale of the specified Deployment
     *
     * @param string $namespace
     * @param $name
     * @return Scale|mixed
     */
    public function readDeployment(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @param Scale $Model
     * @return Scale|mixed
     */
    public function replaceDeployment(string $namespace = 'default', $name, \Scale $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1NamespacedDeploymentScale'
        );
    }

    /**
     * partially update scale of the specified Deployment
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Scale|mixed
     */
    public function patchDeployment(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/deployments/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1NamespacedDeploymentScale'
        );
    }

    /**
     * read scale of the specified ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @return Scale|mixed
     */
    public function readReplicaSet(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @param Scale $Model
     * @return Scale|mixed
     */
    public function replaceReplicaSet(string $namespace = 'default', $name, \Scale $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1NamespacedReplicaSetScale'
        );
    }

    /**
     * partially update scale of the specified ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Scale|mixed
     */
    public function patchReplicaSet(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/replicasets/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1NamespacedReplicaSetScale'
        );
    }

    /**
     * read scale of the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @return Scale|mixed
     */
    public function readStatefulSet(string $namespace = 'default', $name)
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
     * @param string $namespace
     * @param $name
     * @param Scale $Model
     * @return Scale|mixed
     */
    public function replaceStatefulSet(string $namespace = 'default', $name, \Scale $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1NamespacedStatefulSetScale'
        );
    }

    /**
     * partially update scale of the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Scale|mixed
     */
    public function patchStatefulSet(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1/namespaces/{$namespace}/statefulsets/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1NamespacedStatefulSetScale'
        );
    }

    /**
     * read scale of the specified Deployment
     *
     * @param string $namespace
     * @param $name
     * @return Scale|mixed
     */
    public function readDeploymentAppsV1beta1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/deployments/{$name}/scale"
        		,[
        		]
        	)
        	, 'readAppsV1beta1NamespacedDeploymentScale'
        );
    }

    /**
     * replace scale of the specified Deployment
     *
     * @param string $namespace
     * @param $name
     * @param Scale $Model
     * @return Scale|mixed
     */
    public function replaceDeploymentAppsV1beta1(string $namespace = 'default', $name, \Scale $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/deployments/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta1NamespacedDeploymentScale'
        );
    }

    /**
     * partially update scale of the specified Deployment
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Scale|mixed
     */
    public function patchDeploymentAppsV1beta1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/deployments/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta1NamespacedDeploymentScale'
        );
    }

    /**
     * read scale of the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @return Scale|mixed
     */
    public function readStatefulSetAppsV1beta1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}/scale"
        		,[
        		]
        	)
        	, 'readAppsV1beta1NamespacedStatefulSetScale'
        );
    }

    /**
     * replace scale of the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @param Scale $Model
     * @return Scale|mixed
     */
    public function replaceStatefulSetAppsV1beta1(string $namespace = 'default', $name, \Scale $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta1NamespacedStatefulSetScale'
        );
    }

    /**
     * partially update scale of the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Scale|mixed
     */
    public function patchStatefulSetAppsV1beta1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta1NamespacedStatefulSetScale'
        );
    }

    /**
     * read scale of the specified Deployment
     *
     * @param string $namespace
     * @param $name
     * @return Scale|mixed
     */
    public function readDeploymentAppsV1beta2(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/deployments/{$name}/scale"
        		,[
        		]
        	)
        	, 'readAppsV1beta2NamespacedDeploymentScale'
        );
    }

    /**
     * replace scale of the specified Deployment
     *
     * @param string $namespace
     * @param $name
     * @param Scale $Model
     * @return Scale|mixed
     */
    public function replaceDeploymentAppsV1beta2(string $namespace = 'default', $name, \Scale $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/deployments/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta2NamespacedDeploymentScale'
        );
    }

    /**
     * partially update scale of the specified Deployment
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Scale|mixed
     */
    public function patchDeploymentAppsV1beta2(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/deployments/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta2NamespacedDeploymentScale'
        );
    }

    /**
     * read scale of the specified ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @return Scale|mixed
     */
    public function readReplicaSetAppsV1beta2(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/replicasets/{$name}/scale"
        		,[
        		]
        	)
        	, 'readAppsV1beta2NamespacedReplicaSetScale'
        );
    }

    /**
     * replace scale of the specified ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @param Scale $Model
     * @return Scale|mixed
     */
    public function replaceReplicaSetAppsV1beta2(string $namespace = 'default', $name, \Scale $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/replicasets/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta2NamespacedReplicaSetScale'
        );
    }

    /**
     * partially update scale of the specified ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Scale|mixed
     */
    public function patchReplicaSetAppsV1beta2(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/replicasets/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta2NamespacedReplicaSetScale'
        );
    }

    /**
     * read scale of the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @return Scale|mixed
     */
    public function readStatefulSetAppsV1beta2(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/statefulsets/{$name}/scale"
        		,[
        		]
        	)
        	, 'readAppsV1beta2NamespacedStatefulSetScale'
        );
    }

    /**
     * replace scale of the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @param Scale $Model
     * @return Scale|mixed
     */
    public function replaceStatefulSetAppsV1beta2(string $namespace = 'default', $name, \Scale $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/statefulsets/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta2NamespacedStatefulSetScale'
        );
    }

    /**
     * partially update scale of the specified StatefulSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Scale|mixed
     */
    public function patchStatefulSetAppsV1beta2(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta2/namespaces/{$namespace}/statefulsets/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta2NamespacedStatefulSetScale'
        );
    }

    /**
     * read scale of the specified Deployment
     *
     * @param string $namespace
     * @param $name
     * @return Scale|mixed
     */
    public function readDeploymentExtensionsV1beta1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/deployments/{$name}/scale"
        		,[
        		]
        	)
        	, 'readExtensionsV1beta1NamespacedDeploymentScale'
        );
    }

    /**
     * replace scale of the specified Deployment
     *
     * @param string $namespace
     * @param $name
     * @param Scale $Model
     * @return Scale|mixed
     */
    public function replaceDeploymentExtensionsV1beta1(string $namespace = 'default', $name, \Scale $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/deployments/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceExtensionsV1beta1NamespacedDeploymentScale'
        );
    }

    /**
     * partially update scale of the specified Deployment
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Scale|mixed
     */
    public function patchDeploymentExtensionsV1beta1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/deployments/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchExtensionsV1beta1NamespacedDeploymentScale'
        );
    }

    /**
     * read scale of the specified ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @return Scale|mixed
     */
    public function readReplicaSetExtensionsV1beta1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets/{$name}/scale"
        		,[
        		]
        	)
        	, 'readExtensionsV1beta1NamespacedReplicaSetScale'
        );
    }

    /**
     * replace scale of the specified ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @param Scale $Model
     * @return Scale|mixed
     */
    public function replaceReplicaSetExtensionsV1beta1(string $namespace = 'default', $name, \Scale $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceExtensionsV1beta1NamespacedReplicaSetScale'
        );
    }

    /**
     * partially update scale of the specified ReplicaSet
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Scale|mixed
     */
    public function patchReplicaSetExtensionsV1beta1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchExtensionsV1beta1NamespacedReplicaSetScale'
        );
    }

    /**
     * read scale of the specified ReplicationControllerDummy
     *
     * @param string $namespace
     * @param $name
     * @return Scale|mixed
     */
    public function readReplicationControllerDummy(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicationcontrollers/{$name}/scale"
        		,[
        		]
        	)
        	, 'readExtensionsV1beta1NamespacedReplicationControllerDummyScale'
        );
    }

    /**
     * replace scale of the specified ReplicationControllerDummy
     *
     * @param string $namespace
     * @param $name
     * @param Scale $Model
     * @return Scale|mixed
     */
    public function replaceReplicationControllerDummy(string $namespace = 'default', $name, \Scale $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicationcontrollers/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceExtensionsV1beta1NamespacedReplicationControllerDummyScale'
        );
    }

    /**
     * partially update scale of the specified ReplicationControllerDummy
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Scale|mixed
     */
    public function patchReplicationControllerDummy(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicationcontrollers/{$name}/scale"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchExtensionsV1beta1NamespacedReplicationControllerDummyScale'
        );
    }


}


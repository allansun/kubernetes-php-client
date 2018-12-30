<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\Scale as TheScale;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\Scale as TheScaleV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\Scale as TheScaleV1beta2;
use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\Scale as TheScaleV1beta1Extensions;

class Scale extends \Kubernetes\AbstractAPI
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
     * @param $namespace
     * @param $name
     * @param TheScale $Model
     * @return TheScale|mixed
     */
    public function replaceReplicationController($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\Scale $Model)
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheScale|mixed
     */
    public function patchReplicationController($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * @param $namespace
     * @param $name
     * @param TheScale $Model
     * @return TheScale|mixed
     */
    public function replaceDeployment($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\Scale $Model)
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheScale|mixed
     */
    public function patchDeployment($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * @param $namespace
     * @param $name
     * @param TheScale $Model
     * @return TheScale|mixed
     */
    public function replaceReplicaSet($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\Scale $Model)
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheScale|mixed
     */
    public function patchReplicaSet($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * @param $namespace
     * @param $name
     * @param TheScale $Model
     * @return TheScale|mixed
     */
    public function replaceStatefulSet($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\Scale $Model)
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheScale|mixed
     */
    public function patchStatefulSet($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * @param $namespace
     * @param $name
     * @return TheScaleV1beta1|mixed
     */
    public function readDeploymentAppsV1beta1($namespace = 'default', $name)
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
     * @param $namespace
     * @param $name
     * @param TheScaleV1beta1 $Model
     * @return TheScaleV1beta1|mixed
     */
    public function replaceDeploymentAppsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\Scale $Model)
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheScaleV1beta1|mixed
     */
    public function patchDeploymentAppsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * @param $namespace
     * @param $name
     * @return TheScaleV1beta1|mixed
     */
    public function readStatefulSetAppsV1beta1($namespace = 'default', $name)
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
     * @param $namespace
     * @param $name
     * @param TheScaleV1beta1 $Model
     * @return TheScaleV1beta1|mixed
     */
    public function replaceStatefulSetAppsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1beta1\Scale $Model)
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheScaleV1beta1|mixed
     */
    public function patchStatefulSetAppsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * @param $namespace
     * @param $name
     * @return TheScaleV1beta2|mixed
     */
    public function readDeploymentAppsV1beta2($namespace = 'default', $name)
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
     * @param $namespace
     * @param $name
     * @param TheScaleV1beta2 $Model
     * @return TheScaleV1beta2|mixed
     */
    public function replaceDeploymentAppsV1beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\Scale $Model)
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheScaleV1beta2|mixed
     */
    public function patchDeploymentAppsV1beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * @param $namespace
     * @param $name
     * @return TheScaleV1beta2|mixed
     */
    public function readReplicaSetAppsV1beta2($namespace = 'default', $name)
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
     * @param $namespace
     * @param $name
     * @param TheScaleV1beta2 $Model
     * @return TheScaleV1beta2|mixed
     */
    public function replaceReplicaSetAppsV1beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\Scale $Model)
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheScaleV1beta2|mixed
     */
    public function patchReplicaSetAppsV1beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * @param $namespace
     * @param $name
     * @return TheScaleV1beta2|mixed
     */
    public function readStatefulSetAppsV1beta2($namespace = 'default', $name)
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
     * @param $namespace
     * @param $name
     * @param TheScaleV1beta2 $Model
     * @return TheScaleV1beta2|mixed
     */
    public function replaceStatefulSetAppsV1beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Apps\V1beta2\Scale $Model)
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheScaleV1beta2|mixed
     */
    public function patchStatefulSetAppsV1beta2($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * @param $namespace
     * @param $name
     * @return TheScaleV1beta1Extensions|mixed
     */
    public function readDeploymentExtensionsV1beta1($namespace = 'default', $name)
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
     * @param $namespace
     * @param $name
     * @param TheScaleV1beta1Extensions $Model
     * @return TheScaleV1beta1Extensions|mixed
     */
    public function replaceDeploymentExtensionsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\Scale $Model)
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheScaleV1beta1Extensions|mixed
     */
    public function patchDeploymentExtensionsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * @param $namespace
     * @param $name
     * @return TheScaleV1beta1Extensions|mixed
     */
    public function readReplicaSetExtensionsV1beta1($namespace = 'default', $name)
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
     * @param $namespace
     * @param $name
     * @param TheScaleV1beta1Extensions $Model
     * @return TheScaleV1beta1Extensions|mixed
     */
    public function replaceReplicaSetExtensionsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\Scale $Model)
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheScaleV1beta1Extensions|mixed
     */
    public function patchReplicaSetExtensionsV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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
     * @param $namespace
     * @param $name
     * @return TheScaleV1beta1Extensions|mixed
     */
    public function readReplicationControllerDummy($namespace = 'default', $name)
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
     * @param $namespace
     * @param $name
     * @param TheScaleV1beta1Extensions $Model
     * @return TheScaleV1beta1Extensions|mixed
     */
    public function replaceReplicationControllerDummy($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\Scale $Model)
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
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheScaleV1beta1Extensions|mixed
     */
    public function patchReplicationControllerDummy($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
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


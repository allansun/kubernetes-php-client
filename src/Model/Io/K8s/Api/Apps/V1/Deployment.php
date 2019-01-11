<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1;

/**
 * Deployment enables declarative updates for Pods and ReplicaSets.
 */
class Deployment extends \Kubernetes\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'apps/v1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'Deployment';

    /**
     * Standard object metadata.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Specification of the desired behavior of the Deployment.
     *
     * @var DeploymentSpec
     */
    public $spec = null;

    /**
     * Most recently observed status of the Deployment.
     *
     * @var DeploymentStatus
     */
    public $status = null;


}


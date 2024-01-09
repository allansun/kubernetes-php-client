<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha2;

use \KubernetesRuntime\AbstractModel;

/**
 * PodSchedulingContext objects hold information that is needed to schedule a Pod
 * with ResourceClaims that use "WaitForFirstConsumer" allocation mode.
 *
 * This is an alpha type and requires enabling the DynamicResourceAllocation
 * feature gate.
 */
class PodSchedulingContext extends AbstractModel
{
    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'resource.k8s.io/v1alpha2';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'PodSchedulingContext';

    /**
     * Standard object metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Spec describes where resources for the Pod are needed.
     *
     * @var PodSchedulingContextSpec
     */
    public $spec = null;

    /**
     * Status describes where resources for the Pod can be allocated.
     *
     * @var PodSchedulingContextStatus
     */
    public $status = null;
}


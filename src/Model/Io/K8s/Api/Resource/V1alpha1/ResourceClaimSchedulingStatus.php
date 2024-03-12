<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * ResourceClaimSchedulingStatus contains information about one particular
 * ResourceClaim with "WaitForFirstConsumer" allocation mode.
 */
class ResourceClaimSchedulingStatus extends AbstractModel
{
    /**
     * Name matches the pod.spec.resourceClaims[*].Name field.
     *
     * @var string
     */
    public $name = null;

    /**
     * UnsuitableNodes lists nodes that the ResourceClaim cannot be allocated for.
     *
     * The size of this field is limited to 128, the same as for
     * PodSchedulingSpec.PotentialNodes. This may get increased in the future, but not
     * reduced.
     *
     * @var string[]
     */
    public $unsuitableNodes = null;
}


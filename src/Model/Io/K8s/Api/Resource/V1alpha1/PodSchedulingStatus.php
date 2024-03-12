<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * PodSchedulingStatus describes where resources for the Pod can be allocated.
 */
class PodSchedulingStatus extends AbstractModel
{
    /**
     * ResourceClaims describes resource availability for each pod.spec.resourceClaim
     * entry where the corresponding ResourceClaim uses "WaitForFirstConsumer"
     * allocation mode.
     *
     * @var ResourceClaimSchedulingStatus[]
     */
    public $resourceClaims = null;
}


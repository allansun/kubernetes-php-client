<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * PodResourceClaim references exactly one ResourceClaim through a ClaimSource. It
 * adds a name to it that uniquely identifies the ResourceClaim inside the Pod.
 * Containers that need access to the ResourceClaim reference it with this name.
 */
class PodResourceClaim extends AbstractModel
{
    /**
     * Name uniquely identifies this resource claim inside the pod. This must be a
     * DNS_LABEL.
     *
     * @var string
     */
    public $name = null;

    /**
     * Source describes where to find the ResourceClaim.
     *
     * @var ClaimSource
     */
    public $source = null;
}


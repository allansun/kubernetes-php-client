<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * NetworkPolicyStatus describe the current state of the NetworkPolicy.
 */
class NetworkPolicyStatus extends AbstractModel
{
    /**
     * Conditions holds an array of metav1.Condition that describe the state of the
     * NetworkPolicy. Current service state
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Condition[]
     */
    public $conditions = null;
}


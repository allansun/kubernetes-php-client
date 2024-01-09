<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * ServiceCIDRStatus describes the current state of the ServiceCIDR.
 */
class ServiceCIDRStatus extends AbstractModel
{
    /**
     * conditions holds an array of metav1.Condition that describe the state of the
     * ServiceCIDR. Current service state
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Condition[]
     */
    public $conditions = null;
}


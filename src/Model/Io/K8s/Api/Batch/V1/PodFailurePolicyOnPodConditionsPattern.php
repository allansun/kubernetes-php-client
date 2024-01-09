<?php

namespace Kubernetes\Model\Io\K8s\Api\Batch\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * PodFailurePolicyOnPodConditionsPattern describes a pattern for matching an
 * actual pod condition type.
 */
class PodFailurePolicyOnPodConditionsPattern extends AbstractModel
{
    /**
     * Specifies the required Pod condition status. To match a pod condition it is
     * required that the specified status equals the pod condition status. Defaults to
     * True.
     *
     * @var string
     */
    public $status = null;

    /**
     * Specifies the required Pod condition type. To match a pod condition it is
     * required that specified type equals the pod condition type.
     *
     * @var string
     */
    public $type = null;
}


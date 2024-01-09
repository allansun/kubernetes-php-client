<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * PodReadinessGate contains the reference to a pod condition
 */
class PodReadinessGate extends AbstractModel
{
    /**
     * ConditionType refers to a condition in the pod's condition list with matching
     * type.
     *
     * @var string
     */
    public $conditionType = null;
}


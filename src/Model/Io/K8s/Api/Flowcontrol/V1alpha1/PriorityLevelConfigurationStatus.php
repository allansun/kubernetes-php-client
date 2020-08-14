<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1;

/**
 * PriorityLevelConfigurationStatus represents the current state of a
 * "request-priority".
 */
class PriorityLevelConfigurationStatus extends \KubernetesRuntime\AbstractModel
{

    /**
     * `conditions` is the current state of "request-priority".
     *
     * @var PriorityLevelConfigurationCondition[]
     */
    public $conditions = null;


}


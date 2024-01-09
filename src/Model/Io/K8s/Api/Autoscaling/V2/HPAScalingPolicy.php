<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2;

use \KubernetesRuntime\AbstractModel;

/**
 * HPAScalingPolicy is a single policy which must hold true for a specified past
 * interval.
 */
class HPAScalingPolicy extends AbstractModel
{
    /**
     * PeriodSeconds specifies the window of time for which the policy should hold
     * true. PeriodSeconds must be greater than zero and less than or equal to 1800 (30
     * min).
     *
     * @var integer
     */
    public $periodSeconds = null;

    /**
     * Type is used to specify the scaling policy.
     *
     * @var string
     */
    public $type = null;

    /**
     * Value contains the amount of change which is permitted by the policy. It must be
     * greater than zero
     *
     * @var integer
     */
    public $value = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta1;

/**
 * HorizontalPodAutoscalerCondition describes the state of a
 * HorizontalPodAutoscaler at a certain point.
 */
class HorizontalPodAutoscalerCondition extends \Kubernetes\AbstractModel
{

    /**
     * lastTransitionTime is the last time the condition transitioned from one status
     * to another
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastTransitionTime = null;

    /**
     * message is a human-readable explanation containing details about the transition
     *
     * @var string
     */
    public $message = null;

    /**
     * reason is the reason for the condition's last transition.
     *
     * @var string
     */
    public $reason = null;

    /**
     * status is the status of the condition (True, False, Unknown)
     *
     * @var string
     */
    public $status = null;

    /**
     * type describes the current condition
     *
     * @var string
     */
    public $type = null;


}


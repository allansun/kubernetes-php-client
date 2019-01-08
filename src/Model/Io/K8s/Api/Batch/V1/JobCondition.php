<?php

namespace Kubernetes\Model\Io\K8s\Api\Batch\V1;

/**
 * JobCondition describes current state of a job.
 */
class JobCondition extends \Kubernetes\AbstractModel
{

    /**
     * Last time the condition was checked.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastProbeTime = null;

    /**
     * Last time the condition transit from one status to another.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastTransitionTime = null;

    /**
     * Human readable message indicating details about last transition.
     *
     * @var string
     */
    public $message = null;

    /**
     * (brief) reason for the condition's last transition.
     *
     * @var string
     */
    public $reason = null;

    /**
     * Status of the condition, one of True, False, Unknown.
     *
     * @var string
     */
    public $status = null;

    /**
     * Type of job condition, Complete or Failed.
     *
     * @var string
     */
    public $type = null;


}


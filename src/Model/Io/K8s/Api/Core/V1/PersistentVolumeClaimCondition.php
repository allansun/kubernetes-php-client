<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * PersistentVolumeClaimCondition contails details about state of pvc
 */
class PersistentVolumeClaimCondition extends \Kubernetes\AbstractModel
{

    /**
     * Last time we probed the condition.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastProbeTime = null;

    /**
     * Last time the condition transitioned from one status to another.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastTransitionTime = null;

    /**
     * Human-readable message indicating details about last transition.
     *
     * @var string
     */
    public $message = null;

    /**
     * Unique, this should be a short, machine understandable string that gives the
     * reason for condition's last transition. If it reports "ResizeStarted" that means
     * the underlying persistent volume is being resized.
     *
     * @var string
     */
    public $reason = null;

    /**
     * @var string
     */
    public $status = null;

    /**
     * @var string
     */
    public $type = null;


}


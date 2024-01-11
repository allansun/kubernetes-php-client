<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * PersistentVolumeClaimCondition contails details about state of pvc
 */
class PersistentVolumeClaimCondition extends AbstractModel
{
    /**
     * lastProbeTime is the time we probed the condition.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastProbeTime = null;

    /**
     * lastTransitionTime is the time the condition transitioned from one status to
     * another.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastTransitionTime = null;

    /**
     * message is the human-readable message indicating details about last transition.
     *
     * @var string
     */
    public $message = null;

    /**
     * reason is a unique, this should be a short, machine understandable string that
     * gives the reason for condition's last transition. If it reports "ResizeStarted"
     * that means the underlying persistent volume is being resized.
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


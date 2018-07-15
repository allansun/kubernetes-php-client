<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * NodeCondition contains condition information for a node.
 */
class NodeCondition extends \Kubernetes\AbstractModel
{

    /**
     * Last time we got an update on a given condition.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastHeartbeatTime = null;

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
     * Type of node condition.
     *
     * @var string
     */
    public $type = null;


}


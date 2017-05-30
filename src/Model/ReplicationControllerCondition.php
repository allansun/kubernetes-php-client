<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Model;

/**
 * ReplicationControllerCondition describes the state of a replication controller at a certain point.
 *
 * @package Kubernetes\Model
 */
class ReplicationControllerCondition extends AbstractModel
{
    /**
     * @var string
     * The last time the condition transitioned from one status to another.
     */
    public $lastTransitionTime;

    /**
     * @var string
     * A human readable message indicating details about the transition.
     */
    public $message;

    /**
     * @var string
     * The reason for the condition's last transition.
     */
    public $reason;

    /**
     * @var string
     * Status of the condition, one of True, False, Unknown.
     */
    public $status;

    /**
     * @var string
     * Type of replica set condition.
     */
    public $type;

}
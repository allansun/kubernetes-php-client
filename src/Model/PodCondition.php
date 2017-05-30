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


class PodCondition extends AbstractModel
{

    /**
     * @var \DateTime
     * Last time we probed the condition.
     */
    public $lastProbeTime;

    /**
     * @var \DateTime
     * Last time the condition transitioned from one status to another.
     */
    public $lastTransitionTime;

    /**
     * @var string
     * Human-readable message indicating details about last transition.
     */
    public $message;

    /**
     * @var string
     * Unique, one-word, CamelCase reason for the condition's last transition.
     */
    public $reason;

    /**
     * @var string
     * Status is the status of the condition. Can be True, False, Unknown. More info:
     * http://kubernetes.io/docs/user-guide/pod-states#pod-conditions
     */
    public $status;

    /**
     * @var string
     * Type is the type of the condition. Currently only Ready. More info:
     * http://kubernetes.io/docs/user-guide/pod-states#pod-conditions
     */
    public $type;
}
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


class NodeCondition extends AbstractModel
{
    /**
     * @var string
     * Last time we got an update on a given condition.
     */
    public $lastHeartbeatTime;

    /**
     * @var string
     * Last time the condition transit from one status to another.
     */
    public $lastTransitionTime;

    /**
     * @var string
     * Human readable message indicating details about last transition.
     */
    public $message;

    /**
     * @var string
     * (brief) reason for the condition's last transition.
     */
    public $reason;

    /**
     * @var string
     * Status of the condition, one of True, False, Unknown.
     */
    public $status;

    /**
     * @var string
     * Type of node condition.
     */
    public $type;


}
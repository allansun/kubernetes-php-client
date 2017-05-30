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
 * DeploymentCondition describes the state of a deployment at a certain point.
 *
 * @package Kubernetes\Model\Apps
 */
class DeploymentCondition extends AbstractModel
{
    /**
     * @var \DateTime
     * Last time the condition transitioned from one status to another.
     */
    public $lastTransitionTime;

    /**
     * @var \DateTime
     * The last time this condition was updated.
     */
    public $lastUpdateTime;

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
     * Type of deployment condition.
     */
    public $type;
}
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
 * ContainerStateTerminated is a terminated state of a container.
 *
 * @package Kubernetes\Model
 */
class ContainerStateTerminated extends AbstractModel
{
    /**
     * @var string
     * Container's ID in the format 'docker://'
     */
    public $containerID;

    /**
     * @var integer
     * Exit status from the last termination of the container
     */
    public $exitCode;

    /**
     * @var \DateTime
     * Time at which the container last terminated
     */
    public $finishedAt;

    /**
     * @var string
     * Message regarding the last termination of the container
     */
    public $message;

    /**
     * @var string
     * (brief) reason from the last termination of the container
     */
    public $reason;

    /**
     * @var integer
     * Signal from the last termination of the container
     */
    public $signal;

    /**
     * @var \DateTime
     * Time at which previous execution of the container started
     */
    public $startedAt;

}
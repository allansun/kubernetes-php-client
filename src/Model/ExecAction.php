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
 * ExecAction describes a "run in container" action.
 *
 * @package Kubernetes\Model
 */
class ExecAction extends AbstractModel
{

    /**
     * @var string[]
     * Command is the command line to execute inside the container, the working directory for the command is root ('/')
     * in the container's filesystem. The command is simply exec'd, it is not run inside a shell, so traditional shell
     * instructions ('    ', etc) won't work. To use a shell, you need to explicitly call out to that shell.
     * Exit status of 0 is treated as live/healthy and non-zero is unhealthy.
     */
    public $command;
}
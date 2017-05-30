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
 * ContainerStateRunning is a running state of a container.
 *
 * @package Kubernetes\Model
 */
class ContainerStateRunning extends AbstractModel
{
    /**
     * @var \DateTime
     * Time at which the container was last (re-)started
     */
    public $startedAt;
}
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
 * ContainerStateWaiting is a waiting state of a container.
 *
 * @package Kubernetes\Model
 */
class ContainerStateWaiting extends AbstractModel
{
    /**
     * @var string
     * Message regarding why the container is not yet running.
     */
    public $message;

    /**
     * @var string
     * (brief) reason the container is not yet running.
     */
    public $reason;
}
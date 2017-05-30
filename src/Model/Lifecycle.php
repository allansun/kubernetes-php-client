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
 * Lifecycle describes actions that the management system should take in response to container lifecycle events.
 * For the PostStart and PreStop lifecycle handlers, management of the container blocks until the action is complete,
 * unless the container process fails, in which case the handler is aborted.
 *
 * @package Kubernetes\Model
 */
class Lifecycle extends AbstractModel
{
    /**
     * @var Handler
     * PostStart is called immediately after a container is created.
     * If the handler fails, the container is terminated and restarted according to its restart policy.
     * Other management of the container blocks until the hook completes.
     * More info: http://kubernetes.io/docs/user-guide/container-environment#hook-details
     */
    public $postStart;

    /**
     * @var Handler
     * PreStop is called immediately before a container is terminated.
     * The container is terminated after the handler completes. The reason for termination is passed to the handler.
     * Regardless of the outcome of the handler, the container is eventually terminated.
     * Other management of the container blocks until the hook completes.
     * More info: http://kubernetes.io/docs/user-guide/container-environment#hook-details
     */
    public $preStop;

    /**
     * @param Handler $postStart
     *
     * @return self
     */
    public function setPostStart($postStart)
    {
        $this->postStart = $this->_createPropertyValue($postStart, Handler::class, false);

        return $this;
    }

    /**
     * @param Handler $preStop
     *
     * @return self
     */
    public function setPreStop($preStop)
    {
        $this->preStop = $this->_createPropertyValue($preStop, Handler::class, false);

        return $this;
    }

}
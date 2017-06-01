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


class ContainerStatus extends AbstractModel
{

    /**
     * @var string
     * Container's ID in the format 'docker://'. More info:
     * http://kubernetes.io/docs/concepts/containers/container-environment-variables/#container-information
     */
    public $containerID;

    /**
     * @var string
     * The image the container is running. More info: http://kubernetes.io/docs/user-guide/images
     */
    public $image;

    /**
     * @var string
     * ImageID of the container's image.
     */
    public $imageID;

    /**
     * @var ContainerState
     * Details about the container's last termination condition.
     */
    public $lastState;

    /**
     * @var string
     * This must be a DNS_LABEL. Each container in a pod must have a unique name. Cannot be updated.
     */
    public $name;

    /**
     * @var boolean
     * Specifies whether the container has passed its readiness probe.
     */
    public $ready;

    /**
     * @var integer
     * The number of times the container has been restarted, currently based on the number of dead containers that have
     * not yet been removed. Note that this is calculated from dead containers. But those containers are subject to
     * garbage collection. This value will get capped at 5 by GC.
     */
    public $restartCount;

    /**
     * @var ContainerState
     * Details about the container's current condition.
     */
    public $state;

    /**
     * @param ContainerState $lastState
     *
     * @return self
     */
    public function setLastState($lastState)
    {
        $this->lastState = $this->_createPropertyValue($lastState, ContainerState::class, false);

        return $this;
    }

    /**
     * @param ContainerState $state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->state = $this->_createPropertyValue($state, ContainerState::class, false);

        return $this;
    }


}
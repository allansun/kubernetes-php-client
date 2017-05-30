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
 * ContainerState holds a possible state of container. Only one of its members may be specified.
 * If none of them is specified, the default one is ContainerStateWaiting.
 *
 * @package Kubernetes\Model
 */
class ContainerState extends AbstractModel
{

    /**
     * @var ContainerStateRunning
     * Details about a running container
     */
    public $running;

    /**
     * @var ContainerStateTerminated
     * Details about a terminated container
     */
    public $terminated;

    /**
     * @var ContainerStateWaiting
     * Details about a waiting container
     */
    public $waiting;

    /**
     * @param ContainerStateRunning $running
     *
     * @return self
     */
    public function setRunning($running)
    {
        $this->running = $this->_createPropertyValue($running, ContainerStateRunning::class, false);

        return $this;
    }

    /**
     * @param ContainerStateTerminated $terminated
     *
     * @return self
     */
    public function setTerminated($terminated)
    {
        $this->terminated = $this->_createPropertyValue($terminated, ContainerStateTerminated::class, false);

        return $this;
    }

    /**
     * @param ContainerStateWaiting $waiting
     *
     * @return self
     */
    public function setWaiting($waiting)
    {
        $this->waiting = $this->_createPropertyValue($waiting, ContainerStateWaiting::class, false);

        return $this;
    }


}
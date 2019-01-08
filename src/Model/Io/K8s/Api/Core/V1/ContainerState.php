<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * ContainerState holds a possible state of container. Only one of its members may
 * be specified. If none of them is specified, the default one is
 * ContainerStateWaiting.
 */
class ContainerState extends \Kubernetes\AbstractModel
{

    /**
     * Details about a running container
     *
     * @var ContainerStateRunning
     */
    public $running = null;

    /**
     * Details about a terminated container
     *
     * @var ContainerStateTerminated
     */
    public $terminated = null;

    /**
     * Details about a waiting container
     *
     * @var ContainerStateWaiting
     */
    public $waiting = null;


}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * ContainerStatus contains details for the current status of this container.
 */
class ContainerStatus extends \Kubernetes\AbstractModel
{

    /**
     * Container's ID in the format 'docker://<container_id>'.
     *
     * @var string
     */
    public $containerID = null;

    /**
     * The image the container is running. More info:
     * https://kubernetes.io/docs/concepts/containers/images
     *
     * @var string
     */
    public $image = null;

    /**
     * ImageID of the container's image.
     *
     * @var string
     */
    public $imageID = null;

    /**
     * Details about the container's last termination condition.
     *
     * @var ContainerState
     */
    public $lastState = null;

    /**
     * This must be a DNS_LABEL. Each container in a pod must have a unique name.
     * Cannot be updated.
     *
     * @var string
     */
    public $name = null;

    /**
     * Specifies whether the container has passed its readiness probe.
     *
     * @var boolean
     */
    public $ready = null;

    /**
     * The number of times the container has been restarted, currently based on the
     * number of dead containers that have not yet been removed. Note that this is
     * calculated from dead containers. But those containers are subject to garbage
     * collection. This value will get capped at 5 by GC.
     *
     * @var integer
     */
    public $restartCount = null;

    /**
     * Details about the container's current condition.
     *
     * @var ContainerState
     */
    public $state = null;


}


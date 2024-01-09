<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ContainerStatus contains details for the current status of this container.
 */
class ContainerStatus extends AbstractModel
{
    /**
     * Container's ID in the format '<type>://<container_id>'.
     *
     * @var string
     */
    public $containerID = null;

    /**
     * The image the container is running. More info:
     * https://kubernetes.io/docs/concepts/containers/images.
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
     * The number of times the container has been restarted.
     *
     * @var integer
     */
    public $restartCount = null;

    /**
     * Specifies whether the container has passed its startup probe. Initialized as
     * false, becomes true after startupProbe is considered successful. Resets to false
     * when the container is restarted, or if kubelet loses state temporarily. Is
     * always true when no startupProbe is defined.
     *
     * @var boolean
     */
    public $started = null;

    /**
     * Details about the container's current condition.
     *
     * @var ContainerState
     */
    public $state = null;
}


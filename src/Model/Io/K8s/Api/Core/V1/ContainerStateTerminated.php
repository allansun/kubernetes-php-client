<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * ContainerStateTerminated is a terminated state of a container.
 */
class ContainerStateTerminated extends \Kubernetes\AbstractModel
{

    /**
     * Container's ID in the format 'docker://<container_id>'
     *
     * @var string
     */
    public $containerID = null;

    /**
     * Exit status from the last termination of the container
     *
     * @var integer
     */
    public $exitCode = null;

    /**
     * Time at which the container last terminated
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $finishedAt = null;

    /**
     * Message regarding the last termination of the container
     *
     * @var string
     */
    public $message = null;

    /**
     * (brief) reason from the last termination of the container
     *
     * @var string
     */
    public $reason = null;

    /**
     * Signal from the last termination of the container
     *
     * @var integer
     */
    public $signal = null;

    /**
     * Time at which previous execution of the container started
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $startedAt = null;


}


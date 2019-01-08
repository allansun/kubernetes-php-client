<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * ContainerStateWaiting is a waiting state of a container.
 */
class ContainerStateWaiting extends \Kubernetes\AbstractModel
{

    /**
     * Message regarding why the container is not yet running.
     *
     * @var string
     */
    public $message = null;

    /**
     * (brief) reason the container is not yet running.
     *
     * @var string
     */
    public $reason = null;


}


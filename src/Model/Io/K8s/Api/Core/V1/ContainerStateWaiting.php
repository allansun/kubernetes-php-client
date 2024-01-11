<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ContainerStateWaiting is a waiting state of a container.
 */
class ContainerStateWaiting extends AbstractModel
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


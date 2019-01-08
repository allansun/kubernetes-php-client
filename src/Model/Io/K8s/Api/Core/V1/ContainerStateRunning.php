<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * ContainerStateRunning is a running state of a container.
 */
class ContainerStateRunning extends \Kubernetes\AbstractModel
{

    /**
     * Time at which the container was last (re-)started
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $startedAt = null;


}


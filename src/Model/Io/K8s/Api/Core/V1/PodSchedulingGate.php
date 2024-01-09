<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * PodSchedulingGate is associated to a Pod to guard its scheduling.
 */
class PodSchedulingGate extends AbstractModel
{
    /**
     * Name of the scheduling gate. Each scheduling gate must have a unique name field.
     *
     * @var string
     */
    public $name = null;
}


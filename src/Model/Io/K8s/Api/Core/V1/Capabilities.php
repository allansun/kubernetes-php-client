<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Adds and removes POSIX capabilities from running containers.
 */
class Capabilities extends AbstractModel
{
    /**
     * Added capabilities
     *
     * @var string[]
     */
    public $add = null;

    /**
     * Removed capabilities
     *
     * @var string[]
     */
    public $drop = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Adds and removes POSIX capabilities from running containers.
 */
class Capabilities extends \KubernetesRuntime\AbstractModel
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

    protected $isRawObject = true;


}


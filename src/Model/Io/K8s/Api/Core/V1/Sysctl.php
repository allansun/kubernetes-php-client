<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Sysctl defines a kernel parameter to be set
 */
class Sysctl extends AbstractModel
{

    /**
     * Name of a property to set
     *
     * @var string
     */
    public $name = null;

    /**
     * Value of a property to set
     *
     * @var string
     */
    public $value = null;


}


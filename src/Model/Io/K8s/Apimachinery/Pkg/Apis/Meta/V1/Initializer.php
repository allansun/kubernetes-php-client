<?php

namespace Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Initializer is information about an initializer that has not yet completed.
 */
class Initializer extends AbstractModel
{

    /**
     * name of the process that is responsible for initializing this object.
     *
     * @var string
     */
    public $name = null;


}


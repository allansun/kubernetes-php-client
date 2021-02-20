<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ExternalDocumentation allows referencing an external resource for extended
 * documentation.
 */
class ExternalDocumentation extends AbstractModel
{

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var string
     */
    public $url = null;


}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * SecretReference represents a Secret Reference. It has enough information to
 * retrieve secret in any namespace
 */
class SecretReference extends AbstractModel
{

    /**
     * name is unique within a namespace to reference a secret resource.
     *
     * @var string
     */
    public $name = null;

    /**
     * namespace defines the space within which the secret name must be unique.
     *
     * @var string
     */
    public $namespace = null;


}


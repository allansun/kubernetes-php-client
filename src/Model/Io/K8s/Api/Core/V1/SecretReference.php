<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * SecretReference represents a Secret Reference. It has enough information to
 * retrieve secret in any namespace
 */
class SecretReference extends \Kubernetes\AbstractModel
{

    /**
     * Name is unique within a namespace to reference a secret resource.
     *
     * @var string
     */
    public $name = null;

    /**
     * Namespace defines the space within which the secret name must be unique.
     *
     * @var string
     */
    public $namespace = null;


}


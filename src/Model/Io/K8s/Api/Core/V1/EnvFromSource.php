<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * EnvFromSource represents the source of a set of ConfigMaps
 */
class EnvFromSource extends \Kubernetes\AbstractModel
{

    /**
     * The ConfigMap to select from
     *
     * @var ConfigMapEnvSource
     */
    public $configMapRef = null;

    /**
     * An optional identifer to prepend to each key in the ConfigMap. Must be a
     * C_IDENTIFIER.
     *
     * @var string
     */
    public $prefix = null;

    /**
     * The Secret to select from
     *
     * @var SecretEnvSource
     */
    public $secretRef = null;


}


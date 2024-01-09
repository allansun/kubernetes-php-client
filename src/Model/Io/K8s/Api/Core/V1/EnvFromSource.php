<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * EnvFromSource represents the source of a set of ConfigMaps
 */
class EnvFromSource extends AbstractModel
{
    /**
     * The ConfigMap to select from
     *
     * @var ConfigMapEnvSource
     */
    public $configMapRef = null;

    /**
     * An optional identifier to prepend to each key in the ConfigMap. Must be a
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


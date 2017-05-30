<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Model;

/**
 * EnvFromSource represents the source of a set of ConfigMaps
 *
 * @package Kubernetes\Model
 */
class EnvFromSource extends AbstractModel
{
    /**
     * @var ConfigMapEnvSource
     * The ConfigMap to select from
     */
    public $configMapRef;

    /**
     * @var string
     * An optional identifer to prepend to each key in the ConfigMap. Must be a C_IDENTIFIER.
     */
    public $prefix;

    /**
     * @var SecretEnvSource
     * The Secret to select from
     */
    public $secretRef;

    /**
     * @param ConfigMapEnvSource $configMapRef
     *
     * @return self
     */
    public function setConfigMapRef($configMapRef)
    {
        $this->configMapRef = $this->_createPropertyValue($configMapRef, ConfigMapEnvSource::class, false);

        return $this;
    }

    /**
     * @param SecretEnvSource $secretRef
     *
     * @return self
     */
    public function setSecretRef($secretRef)
    {
        $this->secretRef = $this->_createPropertyValue($secretRef, SecretEnvSource::class, false);

        return $this;
    }

}
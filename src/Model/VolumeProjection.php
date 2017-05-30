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
 * Projection that may be projected along with other supported volume types
 *
 * @package Kubernetes\Model
 */
class VolumeProjection extends AbstractModel
{
    /**
     * @var ConfigMapProjection
     */
    public $configMap;

    /**
     * @var DownwardAPIProjection
     */
    public $downwardAPI;

    /**
     * @var SecretProjection
     */
    public $secret;

    /**
     * @param ConfigMapProjection $configMap
     *
     * @return self
     */
    public function setConfigMap($configMap)
    {
        $this->configMap = $this->_createPropertyValue($configMap, ConfigMapProjection::class, false);

        return $this;
    }

    /**
     * @param DownwardAPIProjection $downwardAPI
     *
     * @return self
     */
    public function setDownwardAPI($downwardAPI)
    {
        $this->downwardAPI = $this->_createPropertyValue($downwardAPI, DownwardAPIProjection::class, false);

        return $this;
    }

    /**
     * @param SecretProjection $secret
     *
     * @return self
     */
    public function setSecret($secret)
    {
        $this->secret = $this->_createPropertyValue($secret, SecretProjection::class, false);

        return $this;
    }

}
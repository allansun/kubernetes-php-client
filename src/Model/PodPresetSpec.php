<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with~ this source code.
 */

namespace Kubernetes\Model;


class PodPresetSpec extends AbstractModel
{
    /**
     * @var EnvVar[]
     * Env defines the collection of EnvVar to inject into containers.
     */
    public $env;

    /**
     * @var EnvFromSource[]
     * EnvFrom defines the collection of EnvFromSource to inject into containers.
     */
    public $envFrom;

    /**
     * @var LabelSelector
     * Selector is a label query over a set of resources, in this case pods. Required.
     */
    public $selector;

    /**
     * @var VolumeMount
     * VolumeMounts defines the collection of VolumeMount to inject into containers.
     */
    public $volumeMounts;

    /**
     * @var Volume[]
     * Volumes defines the collection of Volume to inject into the pod.
     */
    public $volumes;

    /**
     * @param EnvVar[] $env
     *
     * @return self
     */
    public function setEnv($env)
    {
        $this->env = $this->_createPropertyValue($env, EnvVar::class, true);

        return $this;
    }

    /**
     * @param EnvFromSource[] $envFrom
     *
     * @return self
     */
    public function setEnvFrom($envFrom)
    {
        $this->envFrom = $this->_createPropertyValue($envFrom, EnvFromSource::class, true);

        return $this;
    }

    /**
     * @param LabelSelector $selector
     *
     * @return self
     */
    public function setSelector($selector)
    {
        $this->selector = $this->_createPropertyValue($selector, LabelSelector::class, false);

        return $this;
    }

    /**
     * @param VolumeMount $volumeMounts
     *
     * @return self
     */
    public function setVolumeMounts($volumeMounts)
    {
        $this->volumeMounts = $this->_createPropertyValue($volumeMounts, VolumeMount::class, false);

        return $this;
    }

    /**
     * @param Volume[] $volumes
     *
     * @return self
     */
    public function setVolumes($volumes)
    {
        $this->volumes = $this->_createPropertyValue($volumes, Volume::class, true);

        return $this;
    }
}
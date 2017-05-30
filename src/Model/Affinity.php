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
 * Class Affinity
 *
 * @package Kubernetes\Model
 *
 * Affinity is a group of affinity scheduling rules.
 */
class Affinity extends AbstractModel
{
    /**
     * @var NodeAffinity
     * Describes node affinity scheduling rules for the pod.
     */
    public $nodeAffinity;

    /**
     * @var PodAffinity
     * Describes pod affinity scheduling rules
     * (e.g. co-locate this pod in the same node, zone, etc. as some other pod(s)).
     */
    public $podAffinity;

    /**
     * @var PodAntiAffinity
     * Describes pod anti-affinity scheduling rules
     * (e.g. avoid putting this pod in the same node, zone, etc. as some other pod(s)).
     */
    public $podAntiAffinity;

    /**
     * @param NodeAffinity $nodeAffinity
     *
     * @return self
     */
    public function setNodeAffinity($nodeAffinity)
    {
        $this->nodeAffinity = $this->_createPropertyValue($nodeAffinity, NodeAffinity::class, false);

        return $this;
    }

    /**
     * @param PodAffinity $podAffinity
     *
     * @return self
     */
    public function setPodAffinity($podAffinity)
    {
        $this->podAffinity = $this->_createPropertyValue($podAffinity, PodAffinity::class, false);

        return $this;
    }

    /**
     * @param PodAntiAffinity $podAntiAffinity
     *
     * @return self
     */
    public function setPodAntiAffinity($podAntiAffinity)
    {
        $this->podAntiAffinity = $this->_createPropertyValue($podAntiAffinity, PodAntiAffinity::class, false);

        return $this;
    }


}
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
 * The weights of all of the matched WeightedPodAffinityTerm fields are added per-node
 * to find the most preferred node(s)
 *
 * @package Kubernetes\Model
 */
class WeightedPodAffinityTerm extends AbstractModel
{

    /**
     * @var PodAffinityTerm
     *
     * Required. A pod affinity term, associated with the corresponding weight.
     */
    public $podAffinityTerm;

    /**
     * @var integer
     *
     * weight associated with matching the corresponding podAffinityTerm, in the range 1-100.
     */
    public $weight;

    /**
     * @param PodAffinityTerm $podAffinityTerm
     *
     * @return self
     */
    public function setPodAffinityTerm($podAffinityTerm)
    {
        $this->podAffinityTerm = $this->_createPropertyValue($podAffinityTerm, PodAffinityTerm::class, false);

        return $this;
    }

}
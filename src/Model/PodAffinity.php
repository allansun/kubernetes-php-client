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
 * Pod affinity is a group of inter pod affinity scheduling rules.
 *
 * @package Kubernetes\Model
 */
class PodAffinity extends AbstractModel
{
    /**
     * @var WeightedPodAffinityTerm[]
     *
     * The scheduler will prefer to schedule pods to nodes that satisfy the affinity expressions specified by this
     * field, but it may choose a node that violates one or more of the expressions.
     * The node that is most preferred is the one with the greatest sum of weights, i.e. for each node that meets all
     * of the scheduling requirements (resource request, requiredDuringScheduling affinity expressions, etc.), compute
     * a sum by iterating through the elements of this field and adding "weight" to the sum if the node has pods which
     * matches the corresponding podAffinityTerm; the node(s) with the highest sum are the most preferred.
     */
    public $preferredDuringSchedulingIgnoredDuringExecution;

    /**
     * @var PodAffinityTerm[]
     *
     * NOT YET IMPLEMENTED.
     * TODO: Uncomment field once it is implemented.
     * If the affinity requirements specified by this field are not met at scheduling time, the pod will not be
     * scheduled onto the node. If the affinity requirements specified by this field cease to be met at some point
     * during pod execution (e.g. due to a pod label update), the system will try to eventually evict the pod from
     * its node. When there are multiple elements, the lists of nodes corresponding to each podAffinityTerm are
     * intersected, i.e. all terms must be satisfied.
     * RequiredDuringSchedulingRequiredDuringExecution []
     * PodAffinityTerm json:"requiredDuringSchedulingRequiredDuringExecution,omitempty"
     * If the affinity requirements specified by this field are not met at scheduling time, the pod will not be
     * scheduled onto the node. If the affinity requirements specified by this field cease to be met at some point
     * during pod execution (e.g. due to a pod label update), the system may or may not try to eventually evict the
     * pod from its node. When there are multiple elements, the lists of nodes corresponding to each podAffinityTerm
     * are intersected, i.e. all terms must be satisfied.
     */
    public $requiredDuringSchedulingIgnoredDuringExecution;

    /**
     * @param WeightedPodAffinityTerm[] $preferredDuringSchedulingIgnoredDuringExecution
     *
     * @return self
     */
    public function setPreferredDuringSchedulingIgnoredDuringExecution($preferredDuringSchedulingIgnoredDuringExecution)
    {
        $this->preferredDuringSchedulingIgnoredDuringExecution =
            $this->_createPropertyValue($preferredDuringSchedulingIgnoredDuringExecution,
                WeightedPodAffinityTerm::class, true);

        return $this;
    }

    /**
     * @param PodAffinityTerm[] $requiredDuringSchedulingIgnoredDuringExecution
     *
     * @return self
     */
    public function setRequiredDuringSchedulingIgnoredDuringExecution($requiredDuringSchedulingIgnoredDuringExecution)
    {
        $this->requiredDuringSchedulingIgnoredDuringExecution =
            $this->_createPropertyValue($requiredDuringSchedulingIgnoredDuringExecution, PodAffinityTerm::class, true);

        return $this;
    }


}
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
 * Class NodeAffinity
 *
 * @package Kubernetes\Model
 *
 * Node affinity is a group of node affinity scheduling rules.
 */
class NodeAffinity extends AbstractModel
{
    /**
     * @var PreferredSchedulingTerm[]
     *
     * The scheduler will prefer to schedule pods to nodes that satisfy the affinity expressions
     * specified by this field, but it may choose a node that violates one or more of the expressions.
     * The node that is most preferred is the one with the greatest sum of weights,
     * i.e. for each node that meets all of the scheduling requirements (resource request,
     * requiredDuringScheduling affinity expressions, etc.), compute a sum by iterating through the elements
     * of this field and adding "weight" to the sum if the node matches the corresponding matchExpressions;
     * the node(s) with the highest sum are the most preferred.
     */
    public $preferredDuringSchedulingIgnoredDuringExecution;

    /**
     * @var NodeSelector
     *
     * If the affinity requirements specified by this field are not met at scheduling time,
     * the pod will not be scheduled onto the node. If the affinity requirements specified
     * by this field cease to be met at some point during pod execution (e.g. due to an update),
     * the system may or may not try to eventually evict the pod from its node.
     */
    public $requiredDuringSchedulingIgnoredDuringExecution;

    /**
     * @param PreferredSchedulingTerm[] $preferredDuringSchedulingIgnoredDuringExecution
     *
     * @return self
     */
    public function setPreferredDuringSchedulingIgnoredDuringExecution($preferredDuringSchedulingIgnoredDuringExecution)
    {
        $this->preferredDuringSchedulingIgnoredDuringExecution =
            $this->_createPropertyValue($preferredDuringSchedulingIgnoredDuringExecution,
                PreferredSchedulingTerm::class, true);

        return $this;
    }

    /**
     * @param NodeSelector $requiredDuringSchedulingIgnoredDuringExecution
     *
     * @return self
     */
    public function setRequiredDuringSchedulingIgnoredDuringExecution($requiredDuringSchedulingIgnoredDuringExecution)
    {
        $this->requiredDuringSchedulingIgnoredDuringExecution =
            $this->_createPropertyValue($requiredDuringSchedulingIgnoredDuringExecution, NodeSelector::class, false);

        return $this;
    }

}
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
 * Defines a set of pods (namely those matching the labelSelector relative to the given namespace(s))
 * that this pod should be co-located (affinity) or not co-located (anti-affinity) with, where co-located is
 * defined as running on a node whose value of the label with key tches that of any node on which a pod of the
 * set of pods is running
 *
 * @package Kubernetes\Model
 */
class PodAffinityTerm extends AbstractModel
{
    /**
     * @var LabelSelector
     * A label query over a set of resources, in this case pods.
     */
    public $labelSelector;

    /**
     * @var string[]|null
     * namespaces specifies which namespaces the labelSelector applies to (matches against);
     * nil list means "this pod's namespace,"
     * empty list means "all namespaces"
     * The json tag here is not "omitempty" since we need to distinguish nil and empty.
     * See https://golang.org/pkg/encoding/json/#Marshal for more details.
     */
    public $namespaces;

    /**
     * @var string
     * This pod should be co-located (affinity) or not co-located (anti-affinity) with the pods matching the
     * labelSelector in the specified namespaces, where co-located is defined as running on a node whose value
     * of the label with key topologyKey matches that of any node on which any of the selected pods is running.
     * For PreferredDuringScheduling pod anti-affinity, empty topologyKey is interpreted as
     * "all topologies" ("all topologies" here means all the topologyKeys indicated by scheduler command-line argument
     * --failure-domains);
     * for affinity and for RequiredDuringScheduling pod anti-affinity, empty topologyKey is not allowed.
     */
    public $topologyKey;

    /**
     * @param LabelSelector $labelSelector
     *
     * @return self
     */
    public function setLabelSelector($labelSelector)
    {
        $this->labelSelector = $this->_createPropertyValue($labelSelector, LabelSelector::class, false);

        return $this;
    }

}
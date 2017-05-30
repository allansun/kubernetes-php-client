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


class NetworkPolicySpec extends AbstractModel
{
    /**
     * @var NetworkPolicyIngressRule[]
     * List of ingress rules to be applied to the selected pods. Traffic is allowed to a pod if
     * namespace.networkPolicy.ingress.isolation is undefined and cluster policy allows it, OR if the traffic source is
     * the pod's local node, OR if the traffic matches at least one ingress rule across all of the NetworkPolicy
     * objects whose podSelector matches the pod. If this field is empty then this NetworkPolicy does not affect
     * ingress isolation. If this field is present and contains at least one rule, this policy allows any traffic which
     * matches at least one of the ingress rules in this list.
     */
    public $ingress;

    /**
     * @var LabelSelector
     * Selects the pods to which this NetworkPolicy object applies. The array of ingress rules is applied to any pods
     * selected by this field. Multiple network policies can select the same set of pods. In this case, the ingress
     * rules for each are combined additively. This field is NOT optional and follows standard label selector
     * semantics. An empty podSelector matches all pods in this namespace.
     */
    public $podSelector;

    /**
     * @param NetworkPolicyIngressRule[] $ingress
     *
     * @return self
     */
    public function setIngress($ingress)
    {
        $this->ingress = $this->_createPropertyValue($ingress, NetworkPolicyIngressRule::class, true);

        return $this;
    }

    /**
     * @param LabelSelector $podSelector
     *
     * @return self
     */
    public function setPodSelector($podSelector)
    {
        $this->podSelector = $this->_createPropertyValue($podSelector, LabelSelector::class, false);

        return $this;
    }

}
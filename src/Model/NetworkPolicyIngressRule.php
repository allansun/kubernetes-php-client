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


class NetworkPolicyIngressRule extends AbstractModel
{
    /**
     * @var NetworkPolicyPeer[]
     * List of sources which should be able to access the pods selected for this rule. Items in this list are combined
     * using a logical OR operation. If this field is not provided, this rule matches all sources (traffic not
     * restricted by source). If this field is empty, this rule matches no sources (no traffic matches). If this field
     * is present and contains at least on item, this rule allows traffic only if the traffic matches at least one item
     * in the from list.
     */
    public $from;

    /**
     * @var NetworkPolicyPort[]
     * List of ports which should be made accessible on the pods selected for this rule. Each item in this list is
     * combined using a logical OR. If this field is not provided, this rule matches all ports (traffic not restricted
     * by port). If this field is empty, this rule matches no ports (no traffic matches). If this field is present and
     * contains at least one item, then this rule allows traffic only if the traffic matches at least one port in the
     * list.
     */
    public $ports;

    /**
     * @param NetworkPolicyPeer[] $from
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->from = $this->_createPropertyValue($from, NetworkPolicyPeer::class, true);

        return $this;
    }

    /**
     * @param NetworkPolicyPort[] $ports
     *
     * @return self
     */
    public function setPorts($ports)
    {
        $this->ports = $this->_createPropertyValue($ports, NetworkPolicyPort::class, true);

        return $this;
    }
}
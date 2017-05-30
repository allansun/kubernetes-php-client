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


class NetworkPolicyPeer extends AbstractModel
{
    /**
     * @var LabelSelector
     */
    public $namespaceSelector;

    /**
     * @var LabelSelector
     */
    public $podSelector;

    /**
     * @param LabelSelector $namespaceSelector
     *
     * @return self
     */
    public function setNamespaceSelector($namespaceSelector)
    {
        $this->namespaceSelector = $this->_createPropertyValue($namespaceSelector, LabelSelector::class, false);

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
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
 * Class NodeSelector
 *
 * @package Kubernetes\Model
 *
 * A node selector represents the union of the results of one or more label queries over a set of nodes;
 * that is, it represents the OR of the selectors represented by the node selector terms.
 */
class NodeSelector extends AbstractModel
{
    /**
     * @var NodeSelectorTerm[]
     * Required. A list of node selector terms. The terms are ORed.
     */
    public $nodeSelectorTerms;

    /**
     * @param NodeSelectorTerm[] $nodeSelectorTerms
     *
     * @return self
     */
    public function setNodeSelectorTerms($nodeSelectorTerms)
    {
        $this->nodeSelectorTerms = $this->_createPropertyValue($nodeSelectorTerms, NodeSelectorTerm::class, true);

        return $this;
    }

}
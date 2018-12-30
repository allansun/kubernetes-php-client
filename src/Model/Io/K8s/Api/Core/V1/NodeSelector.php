<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * A node selector represents the union of the results of one or more label queries
 * over a set of nodes; that is, it represents the OR of the selectors represented
 * by the node selector terms.
 */
class NodeSelector extends \Kubernetes\AbstractModel
{

    /**
     * Required. A list of node selector terms. The terms are ORed.
     *
     * @var NodeSelectorTerm[]
     */
    public $nodeSelectorTerms = null;


}


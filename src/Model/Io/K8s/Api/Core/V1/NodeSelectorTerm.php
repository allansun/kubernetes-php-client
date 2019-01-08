<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * A null or empty node selector term matches no objects. The requirements of them
 * are ANDed. The TopologySelectorTerm type implements a subset of the
 * NodeSelectorTerm.
 */
class NodeSelectorTerm extends \Kubernetes\AbstractModel
{

    /**
     * A list of node selector requirements by node's labels.
     *
     * @var NodeSelectorRequirement[]
     */
    public $matchExpressions = null;

    /**
     * A list of node selector requirements by node's fields.
     *
     * @var NodeSelectorRequirement[]
     */
    public $matchFields = null;


}


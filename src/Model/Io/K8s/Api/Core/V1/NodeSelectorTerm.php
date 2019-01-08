<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * A null or empty node selector term matches no objects.
 */
class NodeSelectorTerm extends \Kubernetes\AbstractModel
{

    /**
     * Required. A list of node selector requirements. The requirements are ANDed.
     *
     * @var NodeSelectorRequirement[]
     */
    public $matchExpressions = null;


}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * An empty preferred scheduling term matches all objects with implicit weight 0
 * (i.e. it's a no-op). A null preferred scheduling term matches no objects (i.e.
 * is also a no-op).
 */
class PreferredSchedulingTerm extends \Kubernetes\AbstractModel
{

    /**
     * A node selector term, associated with the corresponding weight.
     *
     * @var NodeSelectorTerm
     */
    public $preference = null;

    /**
     * Weight associated with matching the corresponding nodeSelectorTerm, in the range
     * 1-100.
     *
     * @var integer
     */
    public $weight = null;


}


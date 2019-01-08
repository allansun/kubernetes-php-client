<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * The weights of all of the matched WeightedPodAffinityTerm fields are added
 * per-node to find the most preferred node(s)
 */
class WeightedPodAffinityTerm extends \Kubernetes\AbstractModel
{

    /**
     * Required. A pod affinity term, associated with the corresponding weight.
     *
     * @var PodAffinityTerm
     */
    public $podAffinityTerm = null;

    /**
     * weight associated with matching the corresponding podAffinityTerm, in the range
     * 1-100.
     *
     * @var integer
     */
    public $weight = null;


}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Defines a set of pods (namely those matching the labelSelector relative to the
 * given namespace(s)) that this pod should be co-located (affinity) or not
 * co-located (anti-affinity) with, where co-located is defined as running on a
 * node whose value of the label with key <topologyKey> matches that of any node on
 * which a pod of the set of pods is running
 */
class PodAffinityTerm extends \Kubernetes\AbstractModel
{

    /**
     * A label query over a set of resources, in this case pods.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $labelSelector = null;

    /**
     * namespaces specifies which namespaces the labelSelector applies to (matches
     * against); null or empty list means "this pod's namespace"
     *
     * @var string[]
     */
    public $namespaces = null;

    /**
     * This pod should be co-located (affinity) or not co-located (anti-affinity) with
     * the pods matching the labelSelector in the specified namespaces, where
     * co-located is defined as running on a node whose value of the label with key
     * topologyKey matches that of any node on which any of the selected pods is
     * running. Empty topologyKey is not allowed.
     *
     * @var string
     */
    public $topologyKey = null;


}


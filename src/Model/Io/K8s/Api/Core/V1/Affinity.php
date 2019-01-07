<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Affinity is a group of affinity scheduling rules.
 */
class Affinity extends \Kubernetes\AbstractModel
{

    /**
     * Describes node affinity scheduling rules for the pod.
     *
     * @var NodeAffinity
     */
    public $nodeAffinity = null;

    /**
     * Describes pod affinity scheduling rules (e.g. co-locate this pod in the same
     * node, zone, etc. as some other pod(s)).
     *
     * @var PodAffinity
     */
    public $podAffinity = null;

    /**
     * Describes pod anti-affinity scheduling rules (e.g. avoid putting this pod in the
     * same node, zone, etc. as some other pod(s)).
     *
     * @var PodAntiAffinity
     */
    public $podAntiAffinity = null;


}


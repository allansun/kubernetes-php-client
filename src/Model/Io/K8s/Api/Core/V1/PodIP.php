<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * IP address information for entries in the (plural) PodIPs field. Each entry
 * includes:
 *
 * 	IP: An IP address allocated to the pod. Routable at least within the cluster.
 */
class PodIP extends AbstractModel
{
    /**
     * ip is an IP address (IPv4 or IPv6) assigned to the pod
     *
     * @var string
     */
    public $ip = null;
}


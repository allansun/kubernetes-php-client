<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * IngressLoadBalancerIngress represents the status of a load-balancer ingress
 * point.
 */
class IngressLoadBalancerIngress extends AbstractModel
{
    /**
     * Hostname is set for load-balancer ingress points that are DNS based.
     *
     * @var string
     */
    public $hostname = null;

    /**
     * IP is set for load-balancer ingress points that are IP based.
     *
     * @var string
     */
    public $ip = null;

    /**
     * Ports provides information about the ports exposed by this LoadBalancer.
     *
     * @var IngressPortStatus[]
     */
    public $ports = null;
}


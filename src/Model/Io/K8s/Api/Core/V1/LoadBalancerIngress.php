<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * LoadBalancerIngress represents the status of a load-balancer ingress point:
 * traffic intended for the service should be sent to an ingress point.
 */
class LoadBalancerIngress extends \Kubernetes\AbstractModel
{

    /**
     * Hostname is set for load-balancer ingress points that are DNS based (typically
     * AWS load-balancers)
     *
     * @var string
     */
    public $hostname = null;

    /**
     * IP is set for load-balancer ingress points that are IP based (typically GCE or
     * OpenStack load-balancers)
     *
     * @var string
     */
    public $ip = null;


}


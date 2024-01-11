<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * LoadBalancerStatus represents the status of a load-balancer.
 */
class LoadBalancerStatus extends AbstractModel
{
    /**
     * Ingress is a list containing ingress points for the load-balancer. Traffic
     * intended for the service should be sent to these ingress points.
     *
     * @var LoadBalancerIngress[]
     */
    public $ingress = null;
}


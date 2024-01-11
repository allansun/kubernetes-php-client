<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * IngressLoadBalancerStatus represents the status of a load-balancer.
 */
class IngressLoadBalancerStatus extends AbstractModel
{
    /**
     * ingress is a list containing ingress points for the load-balancer.
     *
     * @var IngressLoadBalancerIngress[]
     */
    public $ingress = null;
}


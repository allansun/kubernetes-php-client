<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * IngressStatus describe the current state of the Ingress.
 */
class IngressStatus extends AbstractModel
{
    /**
     * LoadBalancer contains the current status of the load-balancer.
     *
     * @var IngressLoadBalancerStatus
     */
    public $loadBalancer = null;
}


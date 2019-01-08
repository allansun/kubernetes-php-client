<?php

namespace Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1;

/**
 * IngressStatus describe the current state of the Ingress.
 */
class IngressStatus extends \Kubernetes\AbstractModel
{

    /**
     * LoadBalancer contains the current status of the load-balancer.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\LoadBalancerStatus
     */
    public $loadBalancer = null;


}


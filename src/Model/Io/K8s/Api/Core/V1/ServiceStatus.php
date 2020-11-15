<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ServiceStatus represents the current status of a service.
 */
class ServiceStatus extends AbstractModel
{

    /**
     * LoadBalancer contains the current status of the load-balancer, if one is
     * present.
     *
     * @var LoadBalancerStatus
     */
    public $loadBalancer = null;


}


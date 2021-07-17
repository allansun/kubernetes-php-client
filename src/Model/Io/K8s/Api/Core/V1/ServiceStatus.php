<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ServiceStatus represents the current status of a service.
 */
class ServiceStatus extends AbstractModel
{

    /**
     * Current service state
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Condition[]
     */
    public $conditions = null;

    /**
     * LoadBalancer contains the current status of the load-balancer, if one is
     * present.
     *
     * @var LoadBalancerStatus
     */
    public $loadBalancer = null;


}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * HostIP represents a single IP address allocated to the host.
 */
class HostIP extends AbstractModel
{
    /**
     * IP is the IP address assigned to the host
     *
     * @var string
     */
    public $ip = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * NodeAddress contains information for the node's address.
 */
class NodeAddress extends AbstractModel
{
    /**
     * The node address.
     *
     * @var string
     */
    public $address = null;

    /**
     * Node address type, one of Hostname, ExternalIP or InternalIP.
     *
     * @var string
     */
    public $type = null;
}


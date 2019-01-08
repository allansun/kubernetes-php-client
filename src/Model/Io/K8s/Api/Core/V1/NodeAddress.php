<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * NodeAddress contains information for the node's address.
 */
class NodeAddress extends \Kubernetes\AbstractModel
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


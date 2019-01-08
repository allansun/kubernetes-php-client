<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * EndpointAddress is a tuple that describes single IP address.
 */
class EndpointAddress extends \Kubernetes\AbstractModel
{

    /**
     * The Hostname of this endpoint
     *
     * @var string
     */
    public $hostname = null;

    /**
     * The IP of this endpoint. May not be loopback (127.0.0.0/8), link-local
     * (169.254.0.0/16), or link-local multicast ((224.0.0.0/24). IPv6 is also accepted
     * but not fully supported on all platforms. Also, certain kubernetes components,
     * like kube-proxy, are not IPv6 ready.
     *
     * @var string
     */
    public $ip = null;

    /**
     * Optional: Node hosting this endpoint. This can be used to determine endpoints
     * local to a node.
     *
     * @var string
     */
    public $nodeName = null;

    /**
     * Reference to object providing the endpoint.
     *
     * @var ObjectReference
     */
    public $targetRef = null;


}


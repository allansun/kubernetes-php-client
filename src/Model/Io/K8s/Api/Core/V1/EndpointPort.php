<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * EndpointPort is a tuple that describes a single port.
 */
class EndpointPort extends \Kubernetes\AbstractModel
{

    /**
     * The name of this port (corresponds to ServicePort.Name). Must be a DNS_LABEL.
     * Optional only if one port is defined.
     *
     * @var string
     */
    public $name = null;

    /**
     * The port number of the endpoint.
     *
     * @var integer
     */
    public $port = null;

    /**
     * The IP protocol for this port. Must be UDP or TCP. Default is TCP.
     *
     * @var string
     */
    public $protocol = null;


}


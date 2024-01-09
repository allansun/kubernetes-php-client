<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * EndpointPort is a tuple that describes a single port.
 */
class EndpointPort extends AbstractModel
{
    /**
     * The application protocol for this port. This field follows standard Kubernetes
     * label syntax. Un-prefixed names are reserved for IANA standard service names (as
     * per RFC-6335 and https://www.iana.org/assignments/service-names). Non-standard
     * protocols should use prefixed names such as mycompany.com/my-custom-protocol.
     *
     * @var string
     */
    public $appProtocol = null;

    /**
     * The name of this port.  This must match the 'name' field in the corresponding
     * ServicePort. Must be a DNS_LABEL. Optional only if one port is defined.
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
     * The IP protocol for this port. Must be UDP, TCP, or SCTP. Default is TCP.
     *
     *
     *
     * @var string
     */
    public $protocol = null;
}


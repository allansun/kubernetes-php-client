<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * NetworkPolicyPort describes a port to allow traffic on
 */
class NetworkPolicyPort extends AbstractModel
{
    /**
     * If set, indicates that the range of ports from port to endPort, inclusive,
     * should be allowed by the policy. This field cannot be defined if the port field
     * is not defined or if the port field is defined as a named (string) port. The
     * endPort must be equal or greater than port.
     *
     * @var integer
     */
    public $endPort = null;

    /**
     * The port on the given protocol. This can either be a numerical or named port on
     * a pod. If this field is not provided, this matches all port names and numbers.
     * If present, only traffic on the specified protocol AND port will be matched.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Util\Intstr\IntOrString
     */
    public $port = null;

    /**
     * The protocol (TCP, UDP, or SCTP) which traffic must match. If not specified,
     * this field defaults to TCP.
     *
     * @var string
     */
    public $protocol = null;
}


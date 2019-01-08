<?php

namespace Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1;

/**
 * DEPRECATED 1.9 - This group version of NetworkPolicyPort is deprecated by
 * networking/v1/NetworkPolicyPort.
 *
 * @deprecated
 */
class NetworkPolicyPort extends \Kubernetes\AbstractModel
{

    /**
     * If specified, the port on the given protocol.  This can either be a numerical or
     * named port on a pod.  If this field is not provided, this matches all port names
     * and numbers. If present, only traffic on the specified protocol AND port will be
     * matched.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Util\Intstr\IntOrString
     */
    public $port = null;

    /**
     * Optional.  The protocol (TCP, UDP, or SCTP) which traffic must match. If not
     * specified, this field defaults to TCP.
     *
     * @var string
     */
    public $protocol = null;


}


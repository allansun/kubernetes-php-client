<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1;

/**
 * NetworkPolicyPort describes a port to allow traffic on
 */
class NetworkPolicyPort extends \Kubernetes\AbstractModel
{

    /**
     * The port on the given protocol. This can either be a numerical or named port on
     * a pod. If this field is not provided, this matches all port names and numbers.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Util\Intstr\IntOrString
     */
    public $port = null;

    /**
     * The protocol (TCP or UDP) which traffic must match. If not specified, this field
     * defaults to TCP.
     *
     * @var string
     */
    public $protocol = null;


}


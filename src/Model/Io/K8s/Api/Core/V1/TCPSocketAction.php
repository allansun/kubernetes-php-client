<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * TCPSocketAction describes an action based on opening a socket
 */
class TCPSocketAction extends \Kubernetes\AbstractModel
{

    /**
     * Optional: Host name to connect to, defaults to the pod IP.
     *
     * @var string
     */
    public $host = null;

    /**
     * Number or name of the port to access on the container. Number must be in the
     * range 1 to 65535. Name must be an IANA_SVC_NAME.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Util\Intstr\IntOrString
     */
    public $port = null;


}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * IngressPortStatus represents the error condition of a service port
 */
class IngressPortStatus extends AbstractModel
{
    /**
     * error is to record the problem with the service port The format of the error
     * shall comply with the following rules: - built-in error values shall be
     * specified in this file and those shall use
     *   CamelCase names
     * - cloud provider specific error values must have names that comply with the
     *   format foo.example.com/CamelCase.
     *
     * @var string
     */
    public $error = null;

    /**
     * port is the port number of the ingress port.
     *
     * @var integer
     */
    public $port = null;

    /**
     * protocol is the protocol of the ingress port. The supported values are: "TCP",
     * "UDP", "SCTP"
     *
     * @var string
     */
    public $protocol = null;
}


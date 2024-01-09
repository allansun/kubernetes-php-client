<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

class PortStatus extends AbstractModel
{
    /**
     * Error is to record the problem with the service port The format of the error
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
     * Port is the port number of the service port of which status is recorded here
     *
     * @var integer
     */
    public $port = null;

    /**
     * Protocol is the protocol of the service port of which status is recorded here
     * The supported values are: "TCP", "UDP", "SCTP"
     *
     *
     *
     * @var string
     */
    public $protocol = null;
}


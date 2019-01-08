<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Handler defines a specific action that should be taken
 */
class Handler extends \Kubernetes\AbstractModel
{

    /**
     * One and only one of the following should be specified. Exec specifies the action
     * to take.
     *
     * @var ExecAction
     */
    public $exec = null;

    /**
     * HTTPGet specifies the http request to perform.
     *
     * @var HTTPGetAction
     */
    public $httpGet = null;

    /**
     * TCPSocket specifies an action involving a TCP port. TCP hooks not yet supported
     *
     * @var TCPSocketAction
     */
    public $tcpSocket = null;


}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * LifecycleHandler defines a specific action that should be taken in a lifecycle
 * hook. One and only one of the fields, except TCPSocket must be specified.
 */
class LifecycleHandler extends AbstractModel
{
    /**
     * Exec specifies the action to take.
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
     * Deprecated. TCPSocket is NOT supported as a LifecycleHandler and kept for the
     * backward compatibility. There are no validation of this field and lifecycle
     * hooks will fail in runtime when tcp handler is specified.
     *
     * @var TCPSocketAction
     */
    public $tcpSocket = null;
}


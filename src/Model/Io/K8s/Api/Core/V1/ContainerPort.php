<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ContainerPort represents a network port in a single container.
 */
class ContainerPort extends AbstractModel
{
    /**
     * Number of port to expose on the pod's IP address. This must be a valid port
     * number, 0 < x < 65536.
     *
     * @var integer
     */
    public $containerPort = null;

    /**
     * What host IP to bind the external port to.
     *
     * @var string
     */
    public $hostIP = null;

    /**
     * Number of port to expose on the host. If specified, this must be a valid port
     * number, 0 < x < 65536. If HostNetwork is specified, this must match
     * ContainerPort. Most containers do not need this.
     *
     * @var integer
     */
    public $hostPort = null;

    /**
     * If specified, this must be an IANA_SVC_NAME and unique within the pod. Each
     * named port in a pod must have a unique name. Name for the port that can be
     * referred to by services.
     *
     * @var string
     */
    public $name = null;

    /**
     * Protocol for port. Must be UDP, TCP, or SCTP. Defaults to "TCP".
     *
     *
     *
     * @var string
     */
    public $protocol = null;
}


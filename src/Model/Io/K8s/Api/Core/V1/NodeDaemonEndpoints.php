<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * NodeDaemonEndpoints lists ports opened by daemons running on the Node.
 */
class NodeDaemonEndpoints extends AbstractModel
{
    /**
     * Endpoint on which Kubelet is listening.
     *
     * @var DaemonEndpoint
     */
    public $kubeletEndpoint = null;
}


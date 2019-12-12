<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * DaemonEndpoint contains information about a single Daemon endpoint.
 */
class DaemonEndpoint extends \KubernetesRuntime\AbstractModel
{

    /**
     * Port number of the given endpoint.
     *
     * @var integer
     */
    public $Port = null;


}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

class GRPCAction extends AbstractModel
{
    /**
     * Port number of the gRPC service. Number must be in the range 1 to 65535.
     *
     * @var integer
     */
    public $port = null;

    /**
     * Service is the name of the service to place in the gRPC HealthCheckRequest (see
     * https://github.com/grpc/grpc/blob/master/doc/health-checking.md).
     *
     * If this is not specified, the default behavior is defined by gRPC.
     *
     * @var string
     */
    public $service = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * IngressServiceBackend references a Kubernetes Service as a Backend.
 */
class IngressServiceBackend extends AbstractModel
{
    /**
     * Name is the referenced service. The service must exist in the same namespace as
     * the Ingress object.
     *
     * @var string
     */
    public $name = null;

    /**
     * Port of the referenced service. A port name or port number is required for a
     * IngressServiceBackend.
     *
     * @var ServiceBackendPort
     */
    public $port = null;
}


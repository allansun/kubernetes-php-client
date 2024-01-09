<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * IngressBackend describes all endpoints for a given service and port.
 */
class IngressBackend extends AbstractModel
{
    /**
     * Resource is an ObjectRef to another Kubernetes resource in the namespace of the
     * Ingress object. If resource is specified, a service.Name and service.Port must
     * not be specified. This is a mutually exclusive setting with "Service".
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\TypedLocalObjectReference
     */
    public $resource = null;

    /**
     * Service references a Service as a Backend. This is a mutually exclusive setting
     * with "Resource".
     *
     * @var IngressServiceBackend
     */
    public $service = null;
}


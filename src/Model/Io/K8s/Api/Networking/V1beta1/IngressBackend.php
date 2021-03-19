<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * IngressBackend describes all endpoints for a given service and port.
 */
class IngressBackend extends AbstractModel
{

    /**
     * Resource is an ObjectRef to another Kubernetes resource in the namespace of the
     * Ingress object. If resource is specified, serviceName and servicePort must not
     * be specified.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\TypedLocalObjectReference
     */
    public $resource = null;

    /**
     * Specifies the name of the referenced service.
     *
     * @var string
     */
    public $serviceName = null;

    /**
     * Specifies the port of the referenced service.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Util\Intstr\IntOrString
     */
    public $servicePort = null;


}


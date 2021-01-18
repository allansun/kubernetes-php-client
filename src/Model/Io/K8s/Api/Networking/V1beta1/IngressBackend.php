<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * IngressBackend describes all endpoints for a given service and port.
 */
class IngressBackend extends AbstractModel
{

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


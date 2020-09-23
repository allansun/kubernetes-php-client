<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1;

/**
 * IngressClassSpec provides information about the class of an Ingress.
 */
class IngressClassSpec extends \KubernetesRuntime\AbstractModel
{

    /**
     * Controller refers to the name of the controller that should handle this class.
     * This allows for different "flavors" that are controlled by the same controller.
     * For example, you may have different Parameters for the same implementing
     * controller. This should be specified as a domain-prefixed path no more than 250
     * characters in length, e.g. "acme.io/ingress-controller". This field is
     * immutable.
     *
     * @var string
     */
    public $controller = null;

    /**
     * Parameters is a link to a custom resource containing additional configuration
     * for the controller. This is optional if the controller does not require extra
     * parameters.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\TypedLocalObjectReference
     */
    public $parameters = null;


}


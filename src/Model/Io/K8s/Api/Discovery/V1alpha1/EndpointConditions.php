<?php

namespace Kubernetes\Model\Io\K8s\Api\Discovery\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * EndpointConditions represents the current condition of an endpoint.
 */
class EndpointConditions extends AbstractModel
{

    /**
     * ready indicates that this endpoint is prepared to receive traffic, according to
     * whatever system is managing the endpoint. A nil value indicates an unknown
     * state. In most cases consumers should interpret this unknown state as ready.
     *
     * @var boolean
     */
    public $ready = null;


}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Discovery\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * EndpointConditions represents the current condition of an endpoint.
 */
class EndpointConditions extends AbstractModel
{
    /**
     * ready indicates that this endpoint is prepared to receive traffic, according to
     * whatever system is managing the endpoint. A nil value indicates an unknown
     * state. In most cases consumers should interpret this unknown state as ready. For
     * compatibility reasons, ready should never be "true" for terminating endpoints.
     *
     * @var boolean
     */
    public $ready = null;

    /**
     * serving is identical to ready except that it is set regardless of the
     * terminating state of endpoints. This condition should be set to true for a ready
     * endpoint that is terminating. If nil, consumers should defer to the ready
     * condition.
     *
     * @var boolean
     */
    public $serving = null;

    /**
     * terminating indicates that this endpoint is terminating. A nil value indicates
     * an unknown state. Consumers should interpret this unknown state to mean that the
     * endpoint is not terminating.
     *
     * @var boolean
     */
    public $terminating = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Discovery\V1alpha1;

/**
 * EndpointPort represents a Port used by an EndpointSlice
 */
class EndpointPort extends \KubernetesRuntime\AbstractModel
{

    /**
     * The name of this port. All ports in an EndpointSlice must have a unique name. If
     * the EndpointSlice is dervied from a Kubernetes service, this corresponds to the
     * Service.ports[].name. Name must either be an empty string or pass DNS_LABEL
     * validation: * must be no more than 63 characters long. * must consist of lower
     * case alphanumeric characters or '-'. * must start and end with an alphanumeric
     * character. Default is empty string.
     *
     * @var string
     */
    public $name = null;

    /**
     * The port number of the endpoint. If this is not specified, ports are not
     * restricted and must be interpreted in the context of the specific consumer.
     *
     * @var integer
     */
    public $port = null;

    /**
     * The IP protocol for this port. Must be UDP, TCP, or SCTP. Default is TCP.
     *
     * @var string
     */
    public $protocol = null;


}


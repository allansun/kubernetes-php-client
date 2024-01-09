<?php

namespace Kubernetes\Model\Io\K8s\Api\Discovery\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * EndpointSlice represents a subset of the endpoints that implement a service. For
 * a given service there may be multiple EndpointSlice objects, selected by labels,
 * which must be joined to produce the full set of endpoints.
 */
class EndpointSlice extends AbstractModel
{
    /**
     * addressType specifies the type of address carried by this EndpointSlice. All
     * addresses in this slice must be the same type. This field is immutable after
     * creation. The following address types are currently supported: * IPv4:
     * Represents an IPv4 Address. * IPv6: Represents an IPv6 Address. * FQDN:
     * Represents a Fully Qualified Domain Name.
     *
     *
     *
     * @var string
     */
    public $addressType = null;

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'discovery.k8s.io/v1';

    /**
     * endpoints is a list of unique endpoints in this slice. Each slice may include a
     * maximum of 1000 endpoints.
     *
     * @var Endpoint[]
     */
    public $endpoints = null;

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'EndpointSlice';

    /**
     * Standard object's metadata.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * ports specifies the list of network ports exposed by each endpoint in this
     * slice. Each port must have a unique name. When ports is empty, it indicates that
     * there are no defined ports. When a port is defined with a nil port value, it
     * indicates "all ports". Each slice may include a maximum of 100 ports.
     *
     * @var EndpointPort[]
     */
    public $ports = null;
}


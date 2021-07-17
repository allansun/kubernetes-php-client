<?php

namespace Kubernetes\Model\Io\K8s\Api\Discovery\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Endpoint represents a single logical "backend" implementing a service.
 */
class Endpoint extends AbstractModel
{

    /**
     * addresses of this endpoint. The contents of this field are interpreted according
     * to the corresponding EndpointSlice addressType field. Consumers must handle
     * different types of addresses in the context of their own capabilities. This must
     * contain at least one address but no more than 100.
     *
     * @var string[]
     */
    public $addresses = null;

    /**
     * conditions contains information about the current status of the endpoint.
     *
     * @var EndpointConditions
     */
    public $conditions = null;

    /**
     * deprecatedTopology contains topology information part of the v1beta1 API. This
     * field is deprecated, and will be removed when the v1beta1 API is removed (no
     * sooner than kubernetes v1.24).  While this field can hold values, it is not
     * writable through the v1 API, and any attempts to write to it will be silently
     * ignored. Topology information can be found in the zone and nodeName fields
     * instead.
     *
     * @var object
     */
    public $deprecatedTopology = null;

    /**
     * hints contains information associated with how an endpoint should be consumed.
     *
     * @var EndpointHints
     */
    public $hints = null;

    /**
     * hostname of this endpoint. This field may be used by consumers of endpoints to
     * distinguish endpoints from each other (e.g. in DNS names). Multiple endpoints
     * which use the same hostname should be considered fungible (e.g. multiple A
     * values in DNS). Must be lowercase and pass DNS Label (RFC 1123) validation.
     *
     * @var string
     */
    public $hostname = null;

    /**
     * nodeName represents the name of the Node hosting this endpoint. This can be used
     * to determine endpoints local to a Node. This field can be enabled with the
     * EndpointSliceNodeName feature gate.
     *
     * @var string
     */
    public $nodeName = null;

    /**
     * targetRef is a reference to a Kubernetes object that represents this endpoint.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\ObjectReference
     */
    public $targetRef = null;

    /**
     * zone is the name of the Zone this endpoint exists in.
     *
     * @var string
     */
    public $zone = null;


}


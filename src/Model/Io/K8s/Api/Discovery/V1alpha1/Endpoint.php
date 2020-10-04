<?php

namespace Kubernetes\Model\Io\K8s\Api\Discovery\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * Endpoint represents a single logical "backend" implementing a service.
 */
class Endpoint extends AbstractModel
{

    /**
     * addresses of this endpoint. The contents of this field are interpreted according
     * to the corresponding EndpointSlice addressType field. This allows for cases like
     * dual-stack (IPv4 and IPv6) networking. Consumers (e.g. kube-proxy) must handle
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
     * hostname of this endpoint. This field may be used by consumers of endpoints to
     * distinguish endpoints from each other (e.g. in DNS names). Multiple endpoints
     * which use the same hostname should be considered fungible (e.g. multiple A
     * values in DNS). Must pass DNS Label (RFC 1123) validation.
     *
     * @var string
     */
    public $hostname = null;

    /**
     * targetRef is a reference to a Kubernetes object that represents this endpoint.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\ObjectReference
     */
    public $targetRef = null;

    /**
     * topology contains arbitrary topology information associated with the endpoint.
     * These key/value pairs must conform with the label format.
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels
     * Topology may include a maximum of 16 key/value pairs. This includes, but is not
     * limited to the following well known keys: * kubernetes.io/hostname: the value
     * indicates the hostname of the node
     *   where the endpoint is located. This should match the corresponding
     *   node label.
     * * topology.kubernetes.io/zone: the value indicates the zone where the
     *   endpoint is located. This should match the corresponding node label.
     * * topology.kubernetes.io/region: the value indicates the region where the
     *   endpoint is located. This should match the corresponding node label.
     *
     * @var object
     */
    public $topology = null;


}


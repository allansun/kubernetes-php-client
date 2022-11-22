<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ServicePort contains information on service's port.
 */
class ServicePort extends AbstractModel
{

    /**
     * The application protocol for this port. This field follows standard Kubernetes
     * label syntax. Un-prefixed names are reserved for IANA standard service names (as
     * per RFC-6335 and http://www.iana.org/assignments/service-names). Non-standard
     * protocols should use prefixed names such as mycompany.com/my-custom-protocol.
     * This is a beta field that is guarded by the ServiceAppProtocol feature gate and
     * enabled by default.
     *
     * @var string
     */
    public $appProtocol = null;

    /**
     * The name of this port within the service. This must be a DNS_LABEL. All ports
     * within a ServiceSpec must have unique names. When considering the endpoints for
     * a Service, this must match the 'name' field in the EndpointPort. Optional if
     * only one ServicePort is defined on this service.
     *
     * @var string
     */
    public $name = null;

    /**
     * The port on each node on which this service is exposed when type is NodePort or
     * LoadBalancer.  Usually assigned by the system. If a value is specified,
     * in-range, and not in use it will be used, otherwise the operation will fail.  If
     * not specified, a port will be allocated if this Service requires one.  If this
     * field is specified when creating a Service which does not need it, creation will
     * fail. This field will be wiped when updating a Service to no longer need it
     * (e.g. changing type from NodePort to ClusterIP). More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#type-nodeport
     *
     * @var integer
     */
    public $nodePort = null;

    /**
     * The port that will be exposed by this service.
     *
     * @var integer
     */
    public $port = null;

    /**
     * The IP protocol for this port. Supports "TCP", "UDP", and "SCTP". Default is
     * TCP.
     *
     * @var string
     */
    public $protocol = null;

    /**
     * Number or name of the port to access on the pods targeted by the service. Number
     * must be in the range 1 to 65535. Name must be an IANA_SVC_NAME. If this is a
     * string, it will be looked up as a named port in the target Pod's container
     * ports. If this is not specified, the value of the 'port' field is used (an
     * identity map). This field is ignored for services with clusterIP=None, and
     * should be omitted or set equal to the 'port' field. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#defining-a-service
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Util\Intstr\IntOrString
     */
    public $targetPort = null;


}


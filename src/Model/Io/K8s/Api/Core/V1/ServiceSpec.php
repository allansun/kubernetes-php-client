<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ServiceSpec describes the attributes that a user creates on a service.
 */
class ServiceSpec extends AbstractModel
{

    /**
     * clusterIP is the IP address of the service and is usually assigned randomly by
     * the master. If an address is specified manually and is not in use by others, it
     * will be allocated to the service; otherwise, creation of the service will fail.
     * This field can not be changed through updates. Valid values are "None", empty
     * string (""), or a valid IP address. "None" can be specified for headless
     * services when proxying is not required. Only applies to types ClusterIP,
     * NodePort, and LoadBalancer. Ignored if type is ExternalName. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#virtual-ips-and-service-proxies
     *
     * @var string
     */
    public $clusterIP = null;

    /**
     * ClusterIPs identifies all the ClusterIPs assigned to this service. ClusterIPs
     * are assigned or reserved based on the values of service.spec.ipFamilies. A
     * maximum of two entries (dual-stack IPs) are allowed in ClusterIPs. The IPFamily
     * of each ClusterIP must match values provided in service.spec.ipFamilies. Clients
     * using ClusterIPs must keep it in sync with ClusterIP (if provided) by having
     * ClusterIP matching first element of ClusterIPs.
     *
     * @var string[]
     */
    public $clusterIPs = null;

    /**
     * externalIPs is a list of IP addresses for which nodes in the cluster will also
     * accept traffic for this service.  These IPs are not managed by Kubernetes.  The
     * user is responsible for ensuring that traffic arrives at a node with this IP.  A
     * common example is external load-balancers that are not part of the Kubernetes
     * system.
     *
     * @var string[]
     */
    public $externalIPs = null;

    /**
     * externalName is the external reference that kubedns or equivalent will return as
     * a CNAME record for this service. No proxying will be involved. Must be a
     * lowercase RFC-1123 hostname (https://tools.ietf.org/html/rfc1123) and requires
     * Type to be ExternalName.
     *
     * @var string
     */
    public $externalName = null;

    /**
     * externalTrafficPolicy denotes if this Service desires to route external traffic
     * to node-local or cluster-wide endpoints. "Local" preserves the client source IP
     * and avoids a second hop for LoadBalancer and Nodeport type services, but risks
     * potentially imbalanced traffic spreading. "Cluster" obscures the client source
     * IP and may cause a second hop to another node, but should have good overall
     * load-spreading.
     *
     * @var string
     */
    public $externalTrafficPolicy = null;

    /**
     * healthCheckNodePort specifies the healthcheck nodePort for the service. If not
     * specified, HealthCheckNodePort is created by the service api backend with the
     * allocated nodePort. Will use user-specified nodePort value if specified by the
     * client. Only effects when Type is set to LoadBalancer and ExternalTrafficPolicy
     * is set to Local.
     *
     * @var integer
     */
    public $healthCheckNodePort = null;

    /**
     * IPFamilies identifies all the IPFamilies assigned for this Service. If a value
     * was not provided for IPFamilies it will be defaulted based on the cluster
     * configuration and the value of service.spec.ipFamilyPolicy. A maximum of two
     * values (dual-stack IPFamilies) are allowed in IPFamilies. IPFamilies field is
     * conditionally mutable: it allows for adding or removing a secondary IPFamily,
     * but it does not allow changing the primary IPFamily of the service.
     *
     * @var string[]
     */
    public $ipFamilies = null;

    /**
     * IPFamilyPolicy represents the dual-stack-ness requested or required by this
     * Service. If there is no value provided, then this Service will be considered
     * SingleStack (single IPFamily). Services can be SingleStack (single IPFamily),
     * PreferDualStack (two dual-stack IPFamilies on dual-stack clusters or single
     * IPFamily on single-stack clusters), or RequireDualStack (two dual-stack
     * IPFamilies on dual-stack configured clusters, otherwise fail). The IPFamilies
     * and ClusterIPs assigned to this service can be controlled by
     * service.spec.ipFamilies and service.spec.clusterIPs respectively.
     *
     * @var string
     */
    public $ipFamilyPolicy = null;

    /**
     * Only applies to Service Type: LoadBalancer LoadBalancer will get created with
     * the IP specified in this field. This feature depends on whether the underlying
     * cloud-provider supports specifying the loadBalancerIP when a load balancer is
     * created. This field will be ignored if the cloud-provider does not support the
     * feature.
     *
     * @var string
     */
    public $loadBalancerIP = null;

    /**
     * If specified and supported by the platform, this will restrict traffic through
     * the cloud-provider load-balancer will be restricted to the specified client IPs.
     * This field will be ignored if the cloud-provider does not support the feature."
     * More info:
     * https://kubernetes.io/docs/tasks/access-application-cluster/configure-cloud-provider-firewall/
     *
     * @var string[]
     */
    public $loadBalancerSourceRanges = null;

    /**
     * The list of ports that are exposed by this service. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#virtual-ips-and-service-proxies
     *
     * @var ServicePort[]
     */
    public $ports = null;

    /**
     * publishNotReadyAddresses indicates that any agent which deals with endpoints for
     * this Service should disregard any indications of ready/not-ready. The primary
     * use case for setting this field is for a StatefulSet's Headless Service to
     * propagate SRV DNS records for its Pods for the purpose of peer discovery. The
     * Kubernetes controllers that generate Endpoints and EndpointSlice resources for
     * Services interpret this to mean that all endpoints are considered "ready" even
     * if the Pods themselves are not. Agents which consume only Kubernetes generated
     * endpoints through the Endpoints or EndpointSlice resources can safely assume
     * this behavior.
     *
     * @var boolean
     */
    public $publishNotReadyAddresses = null;

    /**
     * Route service traffic to pods with label keys and values matching this selector.
     * If empty or not present, the service is assumed to have an external process
     * managing its endpoints, which Kubernetes will not modify. Only applies to types
     * ClusterIP, NodePort, and LoadBalancer. Ignored if type is ExternalName. More
     * info: https://kubernetes.io/docs/concepts/services-networking/service/
     *
     * @var object
     */
    public $selector = null;

    /**
     * Supports "ClientIP" and "None". Used to maintain session affinity. Enable client
     * IP based session affinity. Must be ClientIP or None. Defaults to None. More
     * info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#virtual-ips-and-service-proxies
     *
     * @var string
     */
    public $sessionAffinity = null;

    /**
     * sessionAffinityConfig contains the configurations of session affinity.
     *
     * @var SessionAffinityConfig
     */
    public $sessionAffinityConfig = null;

    /**
     * topologyKeys is a preference-order list of topology keys which implementations
     * of services should use to preferentially sort endpoints when accessing this
     * Service, it can not be used at the same time as externalTrafficPolicy=Local.
     * Topology keys must be valid label keys and at most 16 keys may be specified.
     * Endpoints are chosen based on the first topology key with available backends. If
     * this field is specified and all entries have no backends that match the topology
     * of the client, the service has no backends for that client and connections
     * should fail. The special value "*" may be used to mean "any topology". This
     * catch-all value, if used, only makes sense as the last value in the list. If
     * this is not specified or empty, no topology constraints will be applied.
     *
     * @var string[]
     */
    public $topologyKeys = null;

    /**
     * type determines how the Service is exposed. Defaults to ClusterIP. Valid options
     * are ExternalName, ClusterIP, NodePort, and LoadBalancer. "ExternalName" maps to
     * the specified externalName. "ClusterIP" allocates a cluster-internal IP address
     * for load-balancing to endpoints. Endpoints are determined by the selector or if
     * that is not specified, by manual construction of an Endpoints object. If
     * clusterIP is "None", no virtual IP is allocated and the endpoints are published
     * as a set of endpoints rather than a stable IP. "NodePort" builds on ClusterIP
     * and allocates a port on every node which routes to the clusterIP. "LoadBalancer"
     * builds on NodePort and creates an external load-balancer (if supported in the
     * current cloud) which routes to the clusterIP. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#publishing-services-service-types
     *
     * @var string
     */
    public $type = null;


}


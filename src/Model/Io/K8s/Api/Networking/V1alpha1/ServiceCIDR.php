<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * ServiceCIDR defines a range of IP addresses using CIDR format (e.g.
 * 192.168.0.0/24 or 2001:db2::/64). This range is used to allocate ClusterIPs to
 * Service objects.
 */
class ServiceCIDR extends AbstractModel
{
    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'networking.k8s.io/v1alpha1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'ServiceCIDR';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * spec is the desired state of the ServiceCIDR. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status
     *
     * @var ServiceCIDRSpec
     */
    public $spec = null;

    /**
     * status represents the current state of the ServiceCIDR. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status
     *
     * @var ServiceCIDRStatus
     */
    public $status = null;
}


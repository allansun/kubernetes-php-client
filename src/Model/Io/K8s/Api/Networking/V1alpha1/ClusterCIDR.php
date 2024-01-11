<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * ClusterCIDR represents a single configuration for per-Node Pod CIDR allocations
 * when the MultiCIDRRangeAllocator is enabled (see the config for
 * kube-controller-manager).  A cluster may have any number of ClusterCIDR
 * resources, all of which will be considered when allocating a CIDR for a Node.  A
 * ClusterCIDR is eligible to be used for a given Node when the node selector
 * matches the node in question and has free CIDRs to allocate.  In case of
 * multiple matching ClusterCIDR resources, the allocator will attempt to break
 * ties using internal heuristics, but any ClusterCIDR whose node selector matches
 * the Node may be used.
 */
class ClusterCIDR extends AbstractModel
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
    public $kind = 'ClusterCIDR';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Spec is the desired state of the ClusterCIDR. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status
     *
     * @var ClusterCIDRSpec
     */
    public $spec = null;
}


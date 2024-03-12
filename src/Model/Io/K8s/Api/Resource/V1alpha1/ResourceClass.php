<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * ResourceClass is used by administrators to influence how resources are
 * allocated.
 *
 * This is an alpha type and requires enabling the DynamicResourceAllocation
 * feature gate.
 */
class ResourceClass extends AbstractModel
{
    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'resource.k8s.io/v1alpha1';

    /**
     * DriverName defines the name of the dynamic resource driver that is used for
     * allocation of a ResourceClaim that uses this class.
     *
     * Resource drivers have a unique name in forward domain order (acme.example.com).
     *
     * @var string
     */
    public $driverName = null;

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'ResourceClass';

    /**
     * Standard object metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * ParametersRef references an arbitrary separate object that may hold parameters
     * that will be used by the driver when allocating a resource that uses this class.
     * A dynamic resource driver can distinguish between parameters stored here and and
     * those stored in ResourceClaimSpec.
     *
     * @var ResourceClassParametersReference
     */
    public $parametersRef = null;

    /**
     * Only nodes matching the selector will be considered by the scheduler when trying
     * to find a Node that fits a Pod when that Pod uses a ResourceClaim that has not
     * been allocated yet.
     *
     * Setting this field is optional. If null, all nodes are candidates.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\NodeSelector
     */
    public $suitableNodes = null;
}


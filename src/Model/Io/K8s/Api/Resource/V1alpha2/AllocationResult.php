<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha2;

use \KubernetesRuntime\AbstractModel;

/**
 * AllocationResult contains attributes of an allocated resource.
 */
class AllocationResult extends AbstractModel
{
    /**
     * This field will get set by the resource driver after it has allocated the
     * resource to inform the scheduler where it can schedule Pods using the
     * ResourceClaim.
     *
     * Setting this field is optional. If null, the resource is available everywhere.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\NodeSelector
     */
    public $availableOnNodes = null;

    /**
     * ResourceHandles contain the state associated with an allocation that should be
     * maintained throughout the lifetime of a claim. Each ResourceHandle contains data
     * that should be passed to a specific kubelet plugin once it lands on a node. This
     * data is returned by the driver after a successful allocation and is opaque to
     * Kubernetes. Driver documentation may explain to users how to interpret this data
     * if needed.
     *
     * Setting this field is optional. It has a maximum size of 32 entries. If null (or
     * empty), it is assumed this allocation will be processed by a single kubelet
     * plugin with no ResourceHandle data attached. The name of the kubelet plugin
     * invoked will match the DriverName set in the ResourceClaimStatus this
     * AllocationResult is embedded in.
     *
     * @var ResourceHandle[]
     */
    public $resourceHandles = null;

    /**
     * Shareable determines whether the resource supports more than one consumer at a
     * time.
     *
     * @var boolean
     */
    public $shareable = null;
}


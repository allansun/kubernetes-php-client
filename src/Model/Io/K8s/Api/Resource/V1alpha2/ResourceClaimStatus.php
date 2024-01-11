<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha2;

use \KubernetesRuntime\AbstractModel;

/**
 * ResourceClaimStatus tracks whether the resource has been allocated and what the
 * resulting attributes are.
 */
class ResourceClaimStatus extends AbstractModel
{
    /**
     * Allocation is set by the resource driver once a resource or set of resources has
     * been allocated successfully. If this is not specified, the resources have not
     * been allocated yet.
     *
     * @var AllocationResult
     */
    public $allocation = null;

    /**
     * DeallocationRequested indicates that a ResourceClaim is to be deallocated.
     *
     * The driver then must deallocate this claim and reset the field together with
     * clearing the Allocation field.
     *
     * While DeallocationRequested is set, no new consumers may be added to
     * ReservedFor.
     *
     * @var boolean
     */
    public $deallocationRequested = null;

    /**
     * DriverName is a copy of the driver name from the ResourceClass at the time when
     * allocation started.
     *
     * @var string
     */
    public $driverName = null;

    /**
     * ReservedFor indicates which entities are currently allowed to use the claim. A
     * Pod which references a ResourceClaim which is not reserved for that Pod will not
     * be started.
     *
     * There can be at most 32 such reservations. This may get increased in the future,
     * but not reduced.
     *
     * @var ResourceClaimConsumerReference[]
     */
    public $reservedFor = null;
}


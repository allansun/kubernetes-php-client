<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * ResourceClaimSpec defines how a resource is to be allocated.
 */
class ResourceClaimSpec extends AbstractModel
{
    /**
     * Allocation can start immediately or when a Pod wants to use the resource.
     * "WaitForFirstConsumer" is the default.
     *
     * @var string
     */
    public $allocationMode = null;

    /**
     * ParametersRef references a separate object with arbitrary parameters that will
     * be used by the driver when allocating a resource for the claim.
     *
     * The object must be in the same namespace as the ResourceClaim.
     *
     * @var ResourceClaimParametersReference
     */
    public $parametersRef = null;

    /**
     * ResourceClassName references the driver and additional parameters via the name
     * of a ResourceClass that was created as part of the driver deployment.
     *
     * @var string
     */
    public $resourceClassName = null;
}


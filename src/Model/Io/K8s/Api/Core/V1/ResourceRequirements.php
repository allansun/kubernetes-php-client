<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ResourceRequirements describes the compute resource requirements.
 */
class ResourceRequirements extends AbstractModel
{
    /**
     * Claims lists the names of resources, defined in spec.resourceClaims, that are
     * used by this container.
     *
     * This is an alpha field and requires enabling the DynamicResourceAllocation
     * feature gate.
     *
     * This field is immutable. It can only be set for containers.
     *
     * @var ResourceClaim[]
     */
    public $claims = null;

    /**
     * Limits describes the maximum amount of compute resources allowed. More info:
     * https://kubernetes.io/docs/concepts/configuration/manage-resources-containers/
     *
     * @var object
     */
    public $limits = null;

    /**
     * Requests describes the minimum amount of compute resources required. If Requests
     * is omitted for a container, it defaults to Limits if that is explicitly
     * specified, otherwise to an implementation-defined value. More info:
     * https://kubernetes.io/docs/concepts/configuration/manage-resources-containers/
     *
     * @var object
     */
    public $requests = null;
}


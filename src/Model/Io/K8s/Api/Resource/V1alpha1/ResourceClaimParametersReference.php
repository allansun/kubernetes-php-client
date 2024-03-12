<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * ResourceClaimParametersReference contains enough information to let you locate
 * the parameters for a ResourceClaim. The object must be in the same namespace as
 * the ResourceClaim.
 */
class ResourceClaimParametersReference extends AbstractModel
{
    /**
     * APIGroup is the group for the resource being referenced. It is empty for the
     * core API. This matches the group in the APIVersion that is used when creating
     * the resources.
     *
     * @var string
     */
    public $apiGroup = null;

    /**
     * Kind is the type of resource being referenced. This is the same value as in the
     * parameter object's metadata, for example "ConfigMap".
     *
     * @var string
     */
    public $kind = null;

    /**
     * Name is the name of resource being referenced.
     *
     * @var string
     */
    public $name = null;
}


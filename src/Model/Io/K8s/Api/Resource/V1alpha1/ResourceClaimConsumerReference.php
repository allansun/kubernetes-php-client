<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * ResourceClaimConsumerReference contains enough information to let you locate the
 * consumer of a ResourceClaim. The user must be a resource in the same namespace
 * as the ResourceClaim.
 */
class ResourceClaimConsumerReference extends AbstractModel
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
     * Name is the name of resource being referenced.
     *
     * @var string
     */
    public $name = null;

    /**
     * Resource is the type of resource being referenced, for example "pods".
     *
     * @var string
     */
    public $resource = null;

    /**
     * UID identifies exactly one incarnation of the resource.
     *
     * @var string
     */
    public $uid = null;
}


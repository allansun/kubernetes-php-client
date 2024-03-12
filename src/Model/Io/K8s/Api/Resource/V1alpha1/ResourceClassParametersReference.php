<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * ResourceClassParametersReference contains enough information to let you locate
 * the parameters for a ResourceClass.
 */
class ResourceClassParametersReference extends AbstractModel
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
     * parameter object's metadata.
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

    /**
     * Namespace that contains the referenced resource. Must be empty for
     * cluster-scoped resources and non-empty for namespaced resources.
     *
     * @var string
     */
    public $namespace = null;
}


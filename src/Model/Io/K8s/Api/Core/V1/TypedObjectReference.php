<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

class TypedObjectReference extends AbstractModel
{
    /**
     * APIGroup is the group for the resource being referenced. If APIGroup is not
     * specified, the specified Kind must be in the core API group. For any other
     * third-party types, APIGroup is required.
     *
     * @var string
     */
    public $apiGroup = null;

    /**
     * Kind is the type of resource being referenced
     *
     * @var string
     */
    public $kind = null;

    /**
     * Name is the name of resource being referenced
     *
     * @var string
     */
    public $name = null;

    /**
     * Namespace is the namespace of resource being referenced Note that when a
     * namespace is specified, a gateway.networking.k8s.io/ReferenceGrant object is
     * required in the referent namespace to allow that namespace's owner to accept the
     * reference. See the ReferenceGrant documentation for details. (Alpha) This field
     * requires the CrossNamespaceVolumeDataSource feature gate to be enabled.
     *
     * @var string
     */
    public $namespace = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Rbac\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * RoleBinding references a role, but does not contain it.  It can reference a Role
 * in the same namespace or a ClusterRole in the global namespace. It adds who
 * information via Subjects and namespace information by which namespace it exists
 * in.  RoleBindings in a given namespace only have effect in that namespace.
 */
class RoleBinding extends AbstractModel
{
    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'rbac.authorization.k8s.io/v1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'RoleBinding';

    /**
     * Standard object's metadata.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * RoleRef can reference a Role in the current namespace or a ClusterRole in the
     * global namespace. If the RoleRef cannot be resolved, the Authorizer must return
     * an error.
     *
     * @var RoleRef
     */
    public $roleRef = null;

    /**
     * Subjects holds references to the objects the role applies to.
     *
     * @var Subject[]
     */
    public $subjects = null;
}


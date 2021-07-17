<?php

namespace Kubernetes\Model\Io\K8s\Api\Rbac\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ClusterRoleBinding references a ClusterRole, but not contain it.  It can
 * reference a ClusterRole in the global namespace, and adds who information via
 * Subject.
 */
class ClusterRoleBinding extends AbstractModel
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
    public $kind = 'ClusterRoleBinding';

    /**
     * Standard object's metadata.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * RoleRef can only reference a ClusterRole in the global namespace. If the RoleRef
     * cannot be resolved, the Authorizer must return an error.
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


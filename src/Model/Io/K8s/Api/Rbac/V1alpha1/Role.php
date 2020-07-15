<?php

namespace Kubernetes\Model\Io\K8s\Api\Rbac\V1alpha1;

/**
 * Role is a namespaced, logical grouping of PolicyRules that can be referenced as
 * a unit by a RoleBinding. Deprecated in v1.17 in favor of
 * rbac.authorization.k8s.io/v1 Role, and will no longer be served in v1.22.
 */
class Role extends \KubernetesRuntime\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'rbac.authorization.k8s.io/v1alpha1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'Role';

    /**
     * Standard object's metadata.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Rules holds all the PolicyRules for this Role
     *
     * @var PolicyRule[]
     */
    public $rules = null;


}


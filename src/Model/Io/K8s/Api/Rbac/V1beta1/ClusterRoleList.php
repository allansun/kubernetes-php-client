<?php

namespace Kubernetes\Model\Io\K8s\Api\Rbac\V1beta1;

/**
 * ClusterRoleList is a collection of ClusterRoles
 */
class ClusterRoleList extends \KubernetesRuntime\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'rbac.authorization.k8s.io/v1beta1';

    /**
     * Items is a list of ClusterRoles
     *
     * @var ClusterRole[]
     */
    public $items = null;

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'ClusterRoleList';

    /**
     * Standard object's metadata.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ListMeta
     */
    public $metadata = null;

    protected $isRawObject = true;


}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Rbac\V1;

/**
 * ClusterRole is a cluster level, logical grouping of PolicyRules that can be
 * referenced as a unit by a RoleBinding or ClusterRoleBinding.
 */
class ClusterRole extends \Kubernetes\AbstractModel
{

    /**
     * AggregationRule is an optional field that describes how to build the Rules for
     * this ClusterRole. If AggregationRule is set, then the Rules are controller
     * managed and direct changes to Rules will be stomped by the controller.
     *
     * @var AggregationRule
     */
    public $aggregationRule = null;

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'rbac.authorization.k8s.io/v1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'ClusterRole';

    /**
     * Standard object's metadata.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Rules holds all the PolicyRules for this ClusterRole
     *
     * @var PolicyRule[]
     */
    public $rules = null;


}


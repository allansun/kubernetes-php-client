<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * IngressClassParametersReference identifies an API object. This can be used to
 * specify a cluster or namespace-scoped resource.
 */
class IngressClassParametersReference extends AbstractModel
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
     * Kind is the type of resource being referenced.
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
     * Namespace is the namespace of the resource being referenced. This field is
     * required when scope is set to "Namespace" and must be unset when scope is set to
     * "Cluster".
     *
     * @var string
     */
    public $namespace = null;

    /**
     * Scope represents if this refers to a cluster or namespace scoped resource. This
     * may be set to "Cluster" (default) or "Namespace".
     *
     * @var string
     */
    public $scope = null;
}


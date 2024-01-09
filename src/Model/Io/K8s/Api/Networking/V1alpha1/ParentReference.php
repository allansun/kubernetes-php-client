<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * ParentReference describes a reference to a parent object.
 */
class ParentReference extends AbstractModel
{
    /**
     * Group is the group of the object being referenced.
     *
     * @var string
     */
    public $group = null;

    /**
     * Name is the name of the object being referenced.
     *
     * @var string
     */
    public $name = null;

    /**
     * Namespace is the namespace of the object being referenced.
     *
     * @var string
     */
    public $namespace = null;

    /**
     * Resource is the resource of the object being referenced.
     *
     * @var string
     */
    public $resource = null;
}


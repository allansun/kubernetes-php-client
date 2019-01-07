<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * TypedLocalObjectReference contains enough information to let you locate the
 * typed referenced object inside the same namespace.
 */
class TypedLocalObjectReference extends \Kubernetes\AbstractModel
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


}


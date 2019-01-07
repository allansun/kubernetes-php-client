<?php

namespace Kubernetes\Model\Io\K8s\Api\Rbac\V1beta1;

/**
 * RoleRef contains information that points to the role being used
 */
class RoleRef extends \Kubernetes\AbstractModel
{

    /**
     * APIGroup is the group for the resource being referenced
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


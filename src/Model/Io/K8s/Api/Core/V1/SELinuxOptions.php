<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * SELinuxOptions are the labels to be applied to the container
 */
class SELinuxOptions extends \Kubernetes\AbstractModel
{

    /**
     * Level is SELinux level label that applies to the container.
     *
     * @var string
     */
    public $level = null;

    /**
     * Role is a SELinux role label that applies to the container.
     *
     * @var string
     */
    public $role = null;

    /**
     * Type is a SELinux type label that applies to the container.
     *
     * @var string
     */
    public $type = null;

    /**
     * User is a SELinux user label that applies to the container.
     *
     * @var string
     */
    public $user = null;


}


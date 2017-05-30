<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Model;

/**
 * SELinuxOptions are the labels to be applied to the container
 *
 * @package Kubernetes\Model
 */
class SELinuxOptions extends AbstractModel
{
    /**
     * @var string
     * Level is SELinux level label that applies to the container.
     */
    public $level;

    /**
     * @var string
     * Role is a SELinux role label that applies to the container.
     */
    public $role;

    /**
     * @var string
     * Type is a SELinux type label that applies to the container.
     */
    public $type;

    /**
     * @var string
     * User is a SELinux user label that applies to the container.
     */
    public $user;
}
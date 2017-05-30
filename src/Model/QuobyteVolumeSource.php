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
 * Represents a Quobyte mount that lasts the lifetime of a pod.
 * Quobyte volumes do not support ownership management or SELinux relabeling.
 *
 * @package Kubernetes\Model
 */
class QuobyteVolumeSource extends AbstractModel
{
    /**
     * @var string
     * Group to map volume access to Default is no group
     */
    public $group;

    /**
     * @var boolean
     * ReadOnly here will force the Quobyte volume to be mounted with read-only permissions. Defaults to false.
     */
    public $readOnly = false;

    /**
     * @var string
     * Registry represents a single or multiple Quobyte Registry services specified as a string as host:port pair
     * (multiple entries are separated with commas) which acts as the central registry for volumes
     */
    public $registry;

    /**
     * @var string
     * User to map volume access to Defaults to serivceaccount user
     */
    public $user;

    /**
     * @var string
     * Volume is a string that references an already created Quobyte volume by name.
     */
    public $volume;

}
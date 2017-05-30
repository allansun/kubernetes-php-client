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
 * Represents an empty directory for a pod. Empty directory volumes support ownership management and SELinux relabeling.
 *
 * @package Kubernetes\Model
 */
class EmptyDirVolumeSource extends AbstractModel
{
    /**
     * @var string
     * What type of storage medium should back this directory.
     * The default is "" which means to use the node's default medium.
     * Must be an empty string (default) or Memory.
     * More info: http://kubernetes.io/docs/user-guide/volumes#emptydir
     */
    public $medium = '';
}
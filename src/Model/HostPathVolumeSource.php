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
 * Represents a host path mapped into a pod.
 * Host path volumes do not support ownership management or SELinux relabeling.
 *
 * @package Kubernetes\Model
 */
class HostPathVolumeSource extends AbstractModel
{
    /**
     * @var string
     * Path of the directory on the host. More info: http://kubernetes.io/docs/user-guide/volumes#hostpath
     */
    public $path;
}
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
 * Represents an NFS mount that lasts the lifetime of a pod.
 * NFS volumes do not support ownership management or SELinux relabeling.
 *
 * @package Kubernetes\Model
 */
class NFSVolumeSource extends AbstractModel
{
    /**
     * @var string
     * Path that is exported by the NFS server. More info: http://kubernetes.io/docs/user-guide/volumes#nfs
     */
    public $path;

    /**
     * @var boolean
     * ReadOnly here will force the NFS export to be mounted with read-only permissions. Defaults to false.
     * More info: http://kubernetes.io/docs/user-guide/volumes#nfs
     */
    public $readOnly = false;

    /**
     * @var string
     * Server is the hostname or IP address of the NFS server.
     * More info: http://kubernetes.io/docs/user-guide/volumes#nfs
     */
    public $server;

}
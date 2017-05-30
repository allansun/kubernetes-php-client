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
 * Represents a Ceph Filesystem mount that lasts the lifetime of a pod Cephfs volumes do not support
 * ownership management or SELinux relabeling.
 *
 * @package Kubernetes\Model
 */
class CephFSVolumeSource extends AbstractModel
{

    /**
     * @var string[]
     * Required: Monitors is a collection of Ceph monitors
     * More info: http://releases.k8s.io/HEAD/examples/volumes/cephfs/README.md#how-to-use-it
     */
    public $monitors;

    /**
     * @var string
     * Optional: Used as the mounted root, rather than the full Ceph tree, default is /
     */
    public $path = '/';

    /**
     * @var boolean
     * Optional: Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in VolumeMounts.
     * More info: http://releases.k8s.io/HEAD/examples/volumes/cephfs/README.md#how-to-use-it
     */
    public $readOnly = false;

    /**
     * @var string
     * Optional: SecretFile is the path to key ring for User, default is /etc/ceph/user.secret
     * More info: http://releases.k8s.io/HEAD/examples/volumes/cephfs/README.md#how-to-use-it
     */
    public $secretFile = '/etc/ceph/user.secret';


    /**
     * @var null|LocalObjectReference
     * Optional: SecretRef is reference to the authentication secret for User, default is empty.
     * More info: http://releases.k8s.io/HEAD/examples/volumes/cephfs/README.md#how-to-use-it
     */
    public $secretRef = null;

    /**
     * @var string
     * Optional: User is the rados user name, default is admin
     * More info: http://releases.k8s.io/HEAD/examples/volumes/cephfs/README.md#how-to-use-it
     */
    public $user = 'admin';
}
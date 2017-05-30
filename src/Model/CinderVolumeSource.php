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
 * Represents a cinder volume resource in Openstack.
 * A Cinder volume must exist before mounting to a container.
 * The volume must also be in the same region as the kubelet.
 * Cinder volumes support ownership management and SELinux relabeling.
 *
 * @package Kubernetes\Model
 */
class CinderVolumeSource extends AbstractModel
{
    /**
     * @var string
     *
     * Filesystem type of the volume that you want to mount.
     * Tip: Ensure that the filesystem type is supported by the host operating system.
     * Examples: "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified.
     * More info: http://releases.k8s.io/HEAD/examples/mysql-cinder-pd/README.md
     */
    public $fsType = 'ext4';

    /**
     * @var boolean
     *
     * Optional: Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in VolumeMounts. More info: http://releases.k8s.io/HEAD/examples/mysql-cinder-pd/README.md
     */
    public $readOnly = false;

    /**
     * @var string
     *
     * volume id used to identify the volume in cinder
     * More info: http://releases.k8s.io/HEAD/examples/mysql-cinder-pd/README.md
     */
    public $volumeID;
}
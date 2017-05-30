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
 * Represents a Persistent Disk resource in Google Compute Engine.
 * A GCE PD must exist before mounting to a container.
 * The disk must also be in the same GCE project and zone as the kubelet.
 * A GCE PD can only be mounted as read/write once or read-only many times.
 * GCE PDs support ownership management and SELinux relabeling.
 *
 * @package Kubernetes\Model
 */
class GCEPersistentDiskVolumeSource extends AbstractModel
{
    /**
     * @var string
     * Filesystem type of the volume that you want to mount.
     * Tip: Ensure that the filesystem type is supported by the host operating system.
     * Examples: "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified.
     * More info: http://kubernetes.io/docs/user-guide/volumes#gcepersistentdisk
     */
    public $fsType = 'ext4';

    /**
     * @var integer
     * The partition in the volume that you want to mount.
     * If omitted, the default is to mount by volume name.
     * Examples: For volume /dev/sda1, you specify the partition as "1".
     * Similarly, the volume partition for /dev/sda is "0" (or you can leave the property empty).
     * More info: http://kubernetes.io/docs/user-guide/volumes#gcepersistentdisk
     */
    public $partition;

    /**
     * @var string
     * Unique name of the PD resource in GCE. Used to identify the disk in GCE.
     * More info: http://kubernetes.io/docs/user-guide/volumes#gcepersistentdisk
     */
    public $pdName;

    /**
     * @var boolean
     * ReadOnly here will force the ReadOnly setting in VolumeMounts. Defaults to false.
     * More info: http://kubernetes.io/docs/user-guide/volumes#gcepersistentdisk
     */
    public $readOnl = false;

}
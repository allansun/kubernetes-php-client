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
 * Represents an ISCSI disk. ISCSI volumes can only be mounted as read/write once.
 * ISCSI volumes support ownership management and SELinux relabeling.
 *
 * @package Kubernetes\Model
 */
class ISCSIVolumeSource extends AbstractModel
{
    /**
     * @var string
     * Filesystem type of the volume that you want to mount.
     * Tip: Ensure that the filesystem type is supported by the host operating system.
     * Examples: "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified.
     * More info: http://kubernetes.io/docs/user-guide/volumes#iscsi
     */
    public $fsType = 'ext4';

    /**
     * @var string
     * Target iSCSI Qualified Name.
     */
    public $iqn;

    /**
     * @var string
     * Optional: Defaults to 'default' (tcp). iSCSI interface name that uses an iSCSI transport.
     */
    public $iscsiInterface = 'default';

    /**
     * @var string
     * iSCSI target lun number.
     */
    public $lun;

    /**
     * @var string[]
     * iSCSI target portal List. The portal is either an IP or ip_addr:port if the port is other than
     * default (typically TCP ports 860 and 3260).
     */
    public $portals;

    /**
     * @var boolean
     * ReadOnly here will force the ReadOnly setting in VolumeMounts. Defaults to false.
     */
    public $readOnly = false;

    /**
     * @var string
     * iSCSI target portal. The portal is either an IP or ip_addr:port if the port is other than
     * default (typically TCP ports 860 and 3260).
     */
    public $targetPortal;
}
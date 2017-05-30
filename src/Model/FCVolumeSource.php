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
 * Represents a Fibre Channel volume. Fibre Channel volumes can only be mounted as read/write once.
 * Fibre Channel volumes support ownership management and SELinux relabeling.
 *
 * @package Kubernetes\Model
 */
class FCVolumeSource extends AbstractModel
{
    /**
     * @var string
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system.
     * Ex. "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified.
     */
    public $fsType;

    /**
     * @var integer
     * Required: FC target lun number
     */
    public $lun;

    /**
     * @var boolean
     * Optional: Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in VolumeMounts.
     */
    public $readOnly = false;

    /**
     * @var string
     * Required: FC target worldwide names (WWNs)
     */
    public $targetWWNs;
}
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
 * PortworxVolumeSource represents a Portworx volume resource.
 *
 * @package Kubernetes\Model
 */
class PortworxVolumeSource extends AbstractModel
{
    /**
     * @var string
     * FSType represents the filesystem type to mount Must be a filesystem type supported by the host operating system.
     * Ex. "ext4", "xfs". Implicitly inferred to be "ext4" if unspecified.
     */
    public $fsType = 'ext4';

    /**
     * @var boolean
     * Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in VolumeMounts.
     */
    public $readOnly = false;

    /**
     * @var string
     * VolumeID uniquely identifies a Portworx volume
     */
    public $volumeID;
}
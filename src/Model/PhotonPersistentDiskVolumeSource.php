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
 * Represents a Photon Controller persistent disk resource.
 *
 * @package Kubernetes\Model
 */
class PhotonPersistentDiskVolumeSource extends AbstractModel
{
    /**
     * @var string
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system.
     * Ex. "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified.
     */
    public $fsType;

    /**
     * @var string
     * ID that identifies Photon Controller persistent disk
     */
    public $pdID;
}
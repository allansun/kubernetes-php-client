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
 * AzureDisk represents an Azure Data Disk mount on the host and bind mount to the pod.
 *
 * @package Kubernetes\Model
 */
class AzureDiskVolumeSource extends AbstractModel
{

    /**
     * @var string
     * Host Caching mode: None, Read Only, Read Write.
     */
    public $cachingMode;

    /**
     * @var string
     * The Name of the data disk in the blob storage
     */
    public $diskName;

    /**
     * @var string
     * The URI the data disk in the blob storage
     */
    public $diskURI;

    /**
     * @var string
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system.
     * Ex. "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified.
     */
    public $fsType;

    /**
     * @var boolean
     * Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in VolumeMounts.
     */
    public $readOnly;
}
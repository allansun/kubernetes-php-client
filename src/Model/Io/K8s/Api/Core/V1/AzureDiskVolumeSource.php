<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * AzureDisk represents an Azure Data Disk mount on the host and bind mount to the
 * pod.
 */
class AzureDiskVolumeSource extends \Kubernetes\AbstractModel
{

    /**
     * Host Caching mode: None, Read Only, Read Write.
     *
     * @var string
     */
    public $cachingMode = null;

    /**
     * The Name of the data disk in the blob storage
     *
     * @var string
     */
    public $diskName = null;

    /**
     * The URI the data disk in the blob storage
     *
     * @var string
     */
    public $diskURI = null;

    /**
     * Filesystem type to mount. Must be a filesystem type supported by the host
     * operating system. Ex. "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if
     * unspecified.
     *
     * @var string
     */
    public $fsType = null;

    /**
     * Expected values Shared: multiple blob disks per storage account  Dedicated:
     * single blob disk per storage account  Managed: azure managed data disk (only in
     * managed availability set). defaults to shared
     *
     * @var string
     */
    public $kind = null;

    /**
     * Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in
     * VolumeMounts.
     *
     * @var boolean
     */
    public $readOnly = null;


}


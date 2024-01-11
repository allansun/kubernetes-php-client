<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * AzureDisk represents an Azure Data Disk mount on the host and bind mount to the
 * pod.
 */
class AzureDiskVolumeSource extends AbstractModel
{
    /**
     * cachingMode is the Host Caching mode: None, Read Only, Read Write.
     *
     * @var string
     */
    public $cachingMode = null;

    /**
     * diskName is the Name of the data disk in the blob storage
     *
     * @var string
     */
    public $diskName = null;

    /**
     * diskURI is the URI of data disk in the blob storage
     *
     * @var string
     */
    public $diskURI = null;

    /**
     * fsType is Filesystem type to mount. Must be a filesystem type supported by the
     * host operating system. Ex. "ext4", "xfs", "ntfs". Implicitly inferred to be
     * "ext4" if unspecified.
     *
     * @var string
     */
    public $fsType = null;

    /**
     * kind expected values are Shared: multiple blob disks per storage account 
     * Dedicated: single blob disk per storage account  Managed: azure managed data
     * disk (only in managed availability set). defaults to shared
     *
     * @var string
     */
    public $kind = null;

    /**
     * readOnly Defaults to false (read/write). ReadOnly here will force the ReadOnly
     * setting in VolumeMounts.
     *
     * @var boolean
     */
    public $readOnly = null;
}


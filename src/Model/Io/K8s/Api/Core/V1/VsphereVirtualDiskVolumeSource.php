<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Represents a vSphere volume resource.
 */
class VsphereVirtualDiskVolumeSource extends \Kubernetes\AbstractModel
{

    /**
     * Filesystem type to mount. Must be a filesystem type supported by the host
     * operating system. Ex. "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if
     * unspecified.
     *
     * @var string
     */
    public $fsType = null;

    /**
     * Storage Policy Based Management (SPBM) profile ID associated with the
     * StoragePolicyName.
     *
     * @var string
     */
    public $storagePolicyID = null;

    /**
     * Storage Policy Based Management (SPBM) profile name.
     *
     * @var string
     */
    public $storagePolicyName = null;

    /**
     * Path that identifies vSphere volume vmdk
     *
     * @var string
     */
    public $volumePath = null;


}


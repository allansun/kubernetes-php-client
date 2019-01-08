<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Represents a Photon Controller persistent disk resource.
 */
class PhotonPersistentDiskVolumeSource extends \Kubernetes\AbstractModel
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
     * ID that identifies Photon Controller persistent disk
     *
     * @var string
     */
    public $pdID = null;


}


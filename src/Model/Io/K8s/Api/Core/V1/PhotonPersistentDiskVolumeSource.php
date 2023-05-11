<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Represents a Photon Controller persistent disk resource.
 */
class PhotonPersistentDiskVolumeSource extends AbstractModel
{

    /**
     * fsType is the filesystem type to mount. Must be a filesystem type supported by
     * the host operating system. Ex. "ext4", "xfs", "ntfs". Implicitly inferred to be
     * "ext4" if unspecified.
     *
     * @var string
     */
    public $fsType = null;

    /**
     * pdID is the ID that identifies Photon Controller persistent disk
     *
     * @var string
     */
    public $pdID = null;


}


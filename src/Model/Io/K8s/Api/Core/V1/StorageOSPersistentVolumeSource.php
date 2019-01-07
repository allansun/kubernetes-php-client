<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Represents a StorageOS persistent volume resource.
 */
class StorageOSPersistentVolumeSource extends \Kubernetes\AbstractModel
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
     * Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in
     * VolumeMounts.
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * SecretRef specifies the secret to use for obtaining the StorageOS API
     * credentials.  If not specified, default values will be attempted.
     *
     * @var ObjectReference
     */
    public $secretRef = null;

    /**
     * VolumeName is the human-readable name of the StorageOS volume.  Volume names are
     * only unique within a namespace.
     *
     * @var string
     */
    public $volumeName = null;

    /**
     * VolumeNamespace specifies the scope of the volume within StorageOS.  If no
     * namespace is specified then the Pod's namespace will be used.  This allows the
     * Kubernetes name scoping to be mirrored within StorageOS for tighter integration.
     * Set VolumeName to any name to override the default behaviour. Set to "default"
     * if you are not using namespaces within StorageOS. Namespaces that do not
     * pre-exist within StorageOS will be created.
     *
     * @var string
     */
    public $volumeNamespace = null;


}


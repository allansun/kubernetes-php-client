<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * FlexPersistentVolumeSource represents a generic persistent volume resource that
 * is provisioned/attached using an exec based plugin.
 */
class FlexPersistentVolumeSource extends \Kubernetes\AbstractModel
{

    /**
     * Driver is the name of the driver to use for this volume.
     *
     * @var string
     */
    public $driver = null;

    /**
     * Filesystem type to mount. Must be a filesystem type supported by the host
     * operating system. Ex. "ext4", "xfs", "ntfs". The default filesystem depends on
     * FlexVolume script.
     *
     * @var string
     */
    public $fsType = null;

    /**
     * Optional: Extra command options if any.
     *
     * @var object
     */
    public $options = null;

    /**
     * Optional: Defaults to false (read/write). ReadOnly here will force the ReadOnly
     * setting in VolumeMounts.
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * Optional: SecretRef is reference to the secret object containing sensitive
     * information to pass to the plugin scripts. This may be empty if no secret object
     * is specified. If the secret object contains more than one secret, all secrets
     * are passed to the plugin scripts.
     *
     * @var SecretReference
     */
    public $secretRef = null;


}


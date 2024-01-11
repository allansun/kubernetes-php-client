<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * FlexVolume represents a generic volume resource that is provisioned/attached
 * using an exec based plugin.
 */
class FlexVolumeSource extends AbstractModel
{
    /**
     * driver is the name of the driver to use for this volume.
     *
     * @var string
     */
    public $driver = null;

    /**
     * fsType is the filesystem type to mount. Must be a filesystem type supported by
     * the host operating system. Ex. "ext4", "xfs", "ntfs". The default filesystem
     * depends on FlexVolume script.
     *
     * @var string
     */
    public $fsType = null;

    /**
     * options is Optional: this field holds extra command options if any.
     *
     * @var object
     */
    public $options = null;

    /**
     * readOnly is Optional: defaults to false (read/write). ReadOnly here will force
     * the ReadOnly setting in VolumeMounts.
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * secretRef is Optional: secretRef is reference to the secret object containing
     * sensitive information to pass to the plugin scripts. This may be empty if no
     * secret object is specified. If the secret object contains more than one secret,
     * all secrets are passed to the plugin scripts.
     *
     * @var LocalObjectReference
     */
    public $secretRef = null;
}


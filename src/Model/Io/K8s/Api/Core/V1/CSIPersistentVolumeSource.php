<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Represents storage that is managed by an external CSI volume driver (Beta
 * feature)
 */
class CSIPersistentVolumeSource extends \Kubernetes\AbstractModel
{

    /**
     * ControllerPublishSecretRef is a reference to the secret object containing
     * sensitive information to pass to the CSI driver to complete the CSI
     * ControllerPublishVolume and ControllerUnpublishVolume calls. This field is
     * optional, and  may be empty if no secret is required. If the secret object
     * contains more than one secret, all secrets are passed.
     *
     * @var SecretReference
     */
    public $controllerPublishSecretRef = null;

    /**
     * Driver is the name of the driver to use for this volume. Required.
     *
     * @var string
     */
    public $driver = null;

    /**
     * Filesystem type to mount. Must be a filesystem type supported by the host
     * operating system. Ex. "ext4", "xfs", "ntfs".
     *
     * @var string
     */
    public $fsType = null;

    /**
     * NodePublishSecretRef is a reference to the secret object containing sensitive
     * information to pass to the CSI driver to complete the CSI NodePublishVolume and
     * NodeUnpublishVolume calls. This field is optional, and  may be empty if no
     * secret is required. If the secret object contains more than one secret, all
     * secrets are passed.
     *
     * @var SecretReference
     */
    public $nodePublishSecretRef = null;

    /**
     * NodeStageSecretRef is a reference to the secret object containing sensitive
     * information to pass to the CSI driver to complete the CSI NodeStageVolume and
     * NodeStageVolume and NodeUnstageVolume calls. This field is optional, and  may be
     * empty if no secret is required. If the secret object contains more than one
     * secret, all secrets are passed.
     *
     * @var SecretReference
     */
    public $nodeStageSecretRef = null;

    /**
     * Optional: The value to pass to ControllerPublishVolumeRequest. Defaults to false
     * (read/write).
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * Attributes of the volume to publish.
     *
     * @var object
     */
    public $volumeAttributes = null;

    /**
     * VolumeHandle is the unique volume name returned by the CSI volume plugin’s
     * CreateVolume to refer to the volume on all subsequent calls. Required.
     *
     * @var string
     */
    public $volumeHandle = null;


}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Represents storage that is managed by an external CSI volume driver (Beta
 * feature)
 */
class CSIPersistentVolumeSource extends AbstractModel
{
    /**
     * controllerExpandSecretRef is a reference to the secret object containing
     * sensitive information to pass to the CSI driver to complete the CSI
     * ControllerExpandVolume call. This is an beta field and requires enabling
     * ExpandCSIVolumes feature gate. This field is optional, and may be empty if no
     * secret is required. If the secret object contains more than one secret, all
     * secrets are passed.
     *
     * @var SecretReference
     */
    public $controllerExpandSecretRef = null;

    /**
     * controllerPublishSecretRef is a reference to the secret object containing
     * sensitive information to pass to the CSI driver to complete the CSI
     * ControllerPublishVolume and ControllerUnpublishVolume calls. This field is
     * optional, and may be empty if no secret is required. If the secret object
     * contains more than one secret, all secrets are passed.
     *
     * @var SecretReference
     */
    public $controllerPublishSecretRef = null;

    /**
     * driver is the name of the driver to use for this volume. Required.
     *
     * @var string
     */
    public $driver = null;

    /**
     * fsType to mount. Must be a filesystem type supported by the host operating
     * system. Ex. "ext4", "xfs", "ntfs".
     *
     * @var string
     */
    public $fsType = null;

    /**
     * nodeExpandSecretRef is a reference to the secret object containing sensitive
     * information to pass to the CSI driver to complete the CSI NodeExpandVolume call.
     * This is an alpha field and requires enabling CSINodeExpandSecret feature gate.
     * This field is optional, may be omitted if no secret is required. If the secret
     * object contains more than one secret, all secrets are passed.
     *
     * @var SecretReference
     */
    public $nodeExpandSecretRef = null;

    /**
     * nodePublishSecretRef is a reference to the secret object containing sensitive
     * information to pass to the CSI driver to complete the CSI NodePublishVolume and
     * NodeUnpublishVolume calls. This field is optional, and may be empty if no secret
     * is required. If the secret object contains more than one secret, all secrets are
     * passed.
     *
     * @var SecretReference
     */
    public $nodePublishSecretRef = null;

    /**
     * nodeStageSecretRef is a reference to the secret object containing sensitive
     * information to pass to the CSI driver to complete the CSI NodeStageVolume and
     * NodeStageVolume and NodeUnstageVolume calls. This field is optional, and may be
     * empty if no secret is required. If the secret object contains more than one
     * secret, all secrets are passed.
     *
     * @var SecretReference
     */
    public $nodeStageSecretRef = null;

    /**
     * readOnly value to pass to ControllerPublishVolumeRequest. Defaults to false
     * (read/write).
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * volumeAttributes of the volume to publish.
     *
     * @var object
     */
    public $volumeAttributes = null;

    /**
     * volumeHandle is the unique volume name returned by the CSI volume plugin’s
     * CreateVolume to refer to the volume on all subsequent calls. Required.
     *
     * @var string
     */
    public $volumeHandle = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * ScaleIOVolumeSource represents a persistent ScaleIO volume
 */
class ScaleIOVolumeSource extends \Kubernetes\AbstractModel
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
     * The host address of the ScaleIO API Gateway.
     *
     * @var string
     */
    public $gateway = null;

    /**
     * The name of the ScaleIO Protection Domain for the configured storage.
     *
     * @var string
     */
    public $protectionDomain = null;

    /**
     * Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in
     * VolumeMounts.
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * SecretRef references to the secret for ScaleIO user and other sensitive
     * information. If this is not provided, Login operation will fail.
     *
     * @var LocalObjectReference
     */
    public $secretRef = null;

    /**
     * Flag to enable/disable SSL communication with Gateway, default false
     *
     * @var boolean
     */
    public $sslEnabled = null;

    /**
     * Indicates whether the storage for a volume should be ThickProvisioned or
     * ThinProvisioned.
     *
     * @var string
     */
    public $storageMode = null;

    /**
     * The ScaleIO Storage Pool associated with the protection domain.
     *
     * @var string
     */
    public $storagePool = null;

    /**
     * The name of the storage system as configured in ScaleIO.
     *
     * @var string
     */
    public $system = null;

    /**
     * The name of a volume already created in the ScaleIO system that is associated
     * with this volume source.
     *
     * @var string
     */
    public $volumeName = null;


}


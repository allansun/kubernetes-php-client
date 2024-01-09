<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ScaleIOVolumeSource represents a persistent ScaleIO volume
 */
class ScaleIOVolumeSource extends AbstractModel
{
    /**
     * fsType is the filesystem type to mount. Must be a filesystem type supported by
     * the host operating system. Ex. "ext4", "xfs", "ntfs". Default is "xfs".
     *
     * @var string
     */
    public $fsType = null;

    /**
     * gateway is the host address of the ScaleIO API Gateway.
     *
     * @var string
     */
    public $gateway = null;

    /**
     * protectionDomain is the name of the ScaleIO Protection Domain for the configured
     * storage.
     *
     * @var string
     */
    public $protectionDomain = null;

    /**
     * readOnly Defaults to false (read/write). ReadOnly here will force the ReadOnly
     * setting in VolumeMounts.
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * secretRef references to the secret for ScaleIO user and other sensitive
     * information. If this is not provided, Login operation will fail.
     *
     * @var LocalObjectReference
     */
    public $secretRef = null;

    /**
     * sslEnabled Flag enable/disable SSL communication with Gateway, default false
     *
     * @var boolean
     */
    public $sslEnabled = null;

    /**
     * storageMode indicates whether the storage for a volume should be
     * ThickProvisioned or ThinProvisioned. Default is ThinProvisioned.
     *
     * @var string
     */
    public $storageMode = null;

    /**
     * storagePool is the ScaleIO Storage Pool associated with the protection domain.
     *
     * @var string
     */
    public $storagePool = null;

    /**
     * system is the name of the storage system as configured in ScaleIO.
     *
     * @var string
     */
    public $system = null;

    /**
     * volumeName is the name of a volume already created in the ScaleIO system that is
     * associated with this volume source.
     *
     * @var string
     */
    public $volumeName = null;
}


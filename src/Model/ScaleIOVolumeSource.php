<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Model;

/**
 * ScaleIOVolumeSource represents a persistent ScaleIO volume
 *
 * @package Kubernetes\Model
 */
class ScaleIOVolumeSource extends AbstractModel
{

    /**
     * @var string
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system.
     * Ex. "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified.
     */
    public $fsType = 'ext4';

    /**
     * @var string
     * The host address of the ScaleIO API Gateway.
     */
    public $gateway;

    /**
     * @var string
     * The name of the Protection Domain for the configured storage (defaults to "default").
     */
    public $protectionDomain = 'default';

    /**
     * @var boolean
     * Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in VolumeMounts.
     */
    public $readOnly = false;

    /**
     * @var LocalObjectReference
     * SecretRef references to the secret for ScaleIO user and other sensitive information.
     * If this is not provided, Login operation will fail.
     */
    public $secretRef;

    /**
     * @var boolean
     * Flag to enable/disable SSL communication with Gateway, default false
     */
    public $sslEnabled = false;

    /**
     * @var string
     * Indicates whether the storage for a volume should be thick or thin (defaults to "thin").
     */
    public $storageMode = 'thin';

    /**
     * @var string
     * The Storage Pool associated with the protection domain (defaults to "default").
     */
    public $storagePool = 'default';

    /**
     * @var string
     * The name of the storage system as configured in ScaleIO.
     */
    public $system;

    /**
     * @var string
     * The name of a volume already created in the ScaleIO system that is associated with this volume source.
     */
    public $volumeName;
}
<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * PortworxVolumeSource represents a Portworx volume resource.
 */
class PortworxVolumeSource extends AbstractModel
{

    /**
     * fSType represents the filesystem type to mount Must be a filesystem type
     * supported by the host operating system. Ex. "ext4", "xfs". Implicitly inferred
     * to be "ext4" if unspecified.
     *
     * @var string
     */
    public $fsType = null;

    /**
     * readOnly defaults to false (read/write). ReadOnly here will force the ReadOnly
     * setting in VolumeMounts.
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * volumeID uniquely identifies a Portworx volume
     *
     * @var string
     */
    public $volumeID = null;


}


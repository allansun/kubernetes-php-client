<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Represents storage that is managed by an external CSI volume driver
 */
class CSIPersistentVolumeSource extends \Kubernetes\AbstractModel
{

    /**
     * Driver is the name of the driver to use for this volume. Required.
     *
     * @var string
     */
    public $driver = null;

    /**
     * Optional: The value to pass to ControllerPublishVolumeRequest. Defaults to false
     * (read/write).
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * VolumeHandle is the unique volume name returned by the CSI volume plugin’s
     * CreateVolume to refer to the volume on all subsequent calls. Required.
     *
     * @var string
     */
    public $volumeHandle = null;


}


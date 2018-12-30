<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Represents a Fibre Channel volume. Fibre Channel volumes can only be mounted as
 * read/write once. Fibre Channel volumes support ownership management and SELinux
 * relabeling.
 */
class FCVolumeSource extends \Kubernetes\AbstractModel
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
     * Optional: FC target lun number
     *
     * @var integer
     */
    public $lun = null;

    /**
     * Optional: Defaults to false (read/write). ReadOnly here will force the ReadOnly
     * setting in VolumeMounts.
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * Optional: FC target worldwide names (WWNs)
     *
     * @var string[]
     */
    public $targetWWNs = null;

    /**
     * Optional: FC volume world wide identifiers (wwids) Either wwids or combination
     * of targetWWNs and lun must be set, but not both simultaneously.
     *
     * @var string[]
     */
    public $wwids = null;


}


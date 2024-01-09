<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Local represents directly-attached storage with node affinity (Beta feature)
 */
class LocalVolumeSource extends AbstractModel
{
    /**
     * fsType is the filesystem type to mount. It applies only when the Path is a block
     * device. Must be a filesystem type supported by the host operating system. Ex.
     * "ext4", "xfs", "ntfs". The default value is to auto-select a filesystem if
     * unspecified.
     *
     * @var string
     */
    public $fsType = null;

    /**
     * path of the full path to the volume on the node. It can be either a directory or
     * block device (disk, partition, ...).
     *
     * @var string
     */
    public $path = null;
}


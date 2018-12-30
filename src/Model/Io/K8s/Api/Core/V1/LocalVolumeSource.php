<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Local represents directly-attached storage with node affinity (Beta feature)
 */
class LocalVolumeSource extends \Kubernetes\AbstractModel
{

    /**
     * The full path to the volume on the node. It can be either a directory or block
     * device (disk, partition, ...). Directories can be represented only by
     * PersistentVolume with VolumeMode=Filesystem. Block devices can be represented
     * only by VolumeMode=Block, which also requires the BlockVolume alpha feature gate
     * to be enabled.
     *
     * @var string
     */
    public $path = null;


}


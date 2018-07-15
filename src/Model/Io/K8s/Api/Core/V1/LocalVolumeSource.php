<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Local represents directly-attached storage with node affinity
 */
class LocalVolumeSource extends \Kubernetes\AbstractModel
{

    /**
     * The full path to the volume on the node For alpha, this path must be a directory
     * Once block as a source is supported, then this path can point to a block device
     *
     * @var string
     */
    public $path = null;


}


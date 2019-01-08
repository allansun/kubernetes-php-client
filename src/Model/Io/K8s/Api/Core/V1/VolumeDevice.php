<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * volumeDevice describes a mapping of a raw block device within a container.
 */
class VolumeDevice extends \Kubernetes\AbstractModel
{

    /**
     * devicePath is the path inside of the container that the device will be mapped
     * to.
     *
     * @var string
     */
    public $devicePath = null;

    /**
     * name must match the name of a persistentVolumeClaim in the pod
     *
     * @var string
     */
    public $name = null;


}


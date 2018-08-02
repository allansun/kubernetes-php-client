<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * VolumeMount describes a mounting of a Volume within a container.
 */
class VolumeMount extends \Kubernetes\AbstractModel
{

    /**
     * Path within the container at which the volume should be mounted.  Must not
     * contain ':'.
     *
     * @var string
     */
    public $mountPath = null;

    /**
     * mountPropagation determines how mounts are propagated from the host to container
     * and the other way around. When not set, MountPropagationHostToContainer is used.
     * This field is alpha in 1.8 and can be reworked or removed in a future release.
     *
     * @var string
     */
    public $mountPropagation = null;

    /**
     * This must match the Name of a Volume.
     *
     * @var string
     */
    public $name = null;

    /**
     * Mounted read-only if true, read-write otherwise (false or unspecified). Defaults
     * to false.
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * Path within the volume from which the container's volume should be mounted.
     * Defaults to "" (volume's root).
     *
     * @var string
     */
    public $subPath = null;


}


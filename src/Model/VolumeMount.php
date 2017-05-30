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
 * VolumeMount describes a mounting of a Volume within a container.
 *
 * @package Kubernetes\Model
 */
class VolumeMount extends AbstractModel
{
    /**
     * @var string
     * Path within the container at which the volume should be mounted. Must not contain ':'.
     */
    public $mountPath ;

    /**
     * @var string
     * This must match the Name of a Volume.
     */
    public $name;

    /**
     * @var boolean
     * Mounted read-only if true, read-write otherwise (false or unspecified). Defaults to false.
     */
    public $readOnly = false;

    /**
     * @var string
     * Path within the volume from which the container's volume should be mounted. Defaults to "" (volume's root).
     */
    public $subPath = '';
}
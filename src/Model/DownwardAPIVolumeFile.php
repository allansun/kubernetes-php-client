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
 * DownwardAPIVolumeFile represents information to create the file containing the pod field
 *
 * @package Kubernetes\Model
 */
class DownwardAPIVolumeFile extends AbstractModel
{
    /**
     * @var ObjectFieldSelector
     * Required: Selects a field of the pod: only annotations, labels, name and namespace are supported.
     */
    public $fieldRef;

    /**
     * @var integer
     * Optional: mode bits to use on this file, must be a value between 0 and 0777.
     * If not specified, the volume defaultMode will be used.
     * This might be in conflict with other options that affect the file mode,
     * like fsGroup, and the result can be other mode bits set.
     */
    public $mode;

    /**
     * @var string
     * Required: Path is the relative path name of the file to be created. Must not be absolute
     * or contain the '..' path. Must be utf-8 encoded.
     * The first item of the relative path must not start with '..'
     */
    public $path;

    /**
     * @var ResourceFieldSelector
     * Selects a resource of the container: only resources limits and requests
     * (limits.cpu, limits.memory, requests.cpu and requests.memory) are currently supported.
     */
    public $resourceFieldRef;
}
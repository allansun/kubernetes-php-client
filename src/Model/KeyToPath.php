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
 * Maps a string key to a path within a volume.
 *
 * @package Kubernetes\Model
 */
class KeyToPath extends AbstractModel
{
    /**
     * @var string
     * The key to project.
     */
    public $key;

    /**
     * @var integer
     * Optional: mode bits to use on this file, must be a value between 0 and 0777.
     * If not specified, the volume defaultMode will be used.
     * This might be in conflict with other options that affect the file mode, like fsGroup,
     * and the result can be other mode bits set.
     */
    public $mode;

    /**
     * @var string
     * The relative path of the file to map the key to.
     * May not be an absolute path. May not contain the path element '..'. May not start with the string '..'.
     */
    public $path;
}
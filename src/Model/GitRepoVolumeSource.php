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
 * Represents a volume that is populated with the contents of a git repository.
 * Git repo volumes do not support ownership management. Git repo volumes support SELinux relabeling.
 *
 * @package Kubernetes\Model
 */
class GitRepoVolumeSource extends AbstractModel
{
    /**
     * @var string
     * Target directory name. Must not contain or start with '..'.
     * If '.' is supplied, the volume directory will be the git repository.
     * Otherwise, if specified, the volume will contain the git repository in the subdirectory with the given name.
     */
    public $directory;

    /**
     * @var string
     * Repository URL
     */
    public $repository;

    /**
     * @var string
     * Commit hash for the specified revision.
     */
    public $revision;

}
<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Represents a volume that is populated with the contents of a git repository. Git
 * repo volumes do not support ownership management. Git repo volumes support
 * SELinux relabeling.
 */
class GitRepoVolumeSource extends \Kubernetes\AbstractModel
{

    /**
     * Target directory name. Must not contain or start with '..'.  If '.' is supplied,
     * the volume directory will be the git repository.  Otherwise, if specified, the
     * volume will contain the git repository in the subdirectory with the given name.
     *
     * @var string
     */
    public $directory = null;

    /**
     * Repository URL
     *
     * @var string
     */
    public $repository = null;

    /**
     * Commit hash for the specified revision.
     *
     * @var string
     */
    public $revision = null;


}


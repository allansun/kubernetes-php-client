<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Represents a host path mapped into a pod. Host path volumes do not support
 * ownership management or SELinux relabeling.
 */
class HostPathVolumeSource extends AbstractModel
{

    /**
     * path of the directory on the host. If the path is a symlink, it will follow the
     * link to the real path. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#hostpath
     *
     * @var string
     */
    public $path = null;

    /**
     * type for HostPath Volume Defaults to "" More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#hostpath
     *
     * @var string
     */
    public $type = null;


}


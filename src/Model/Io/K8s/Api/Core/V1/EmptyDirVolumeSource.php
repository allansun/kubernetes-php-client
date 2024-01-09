<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Represents an empty directory for a pod. Empty directory volumes support
 * ownership management and SELinux relabeling.
 */
class EmptyDirVolumeSource extends AbstractModel
{
    /**
     * medium represents what type of storage medium should back this directory. The
     * default is "" which means to use the node's default medium. Must be an empty
     * string (default) or Memory. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#emptydir
     *
     * @var string
     */
    public $medium = null;

    /**
     * sizeLimit is the total amount of local storage required for this EmptyDir
     * volume. The size limit is also applicable for memory medium. The maximum usage
     * on memory medium EmptyDir would be the minimum value between the SizeLimit
     * specified here and the sum of memory limits of all containers in a pod. The
     * default is nil which means that the limit is undefined. More info:
     * http://kubernetes.io/docs/user-guide/volumes#emptydir
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Api\Resource\Quantity
     */
    public $sizeLimit = null;
}


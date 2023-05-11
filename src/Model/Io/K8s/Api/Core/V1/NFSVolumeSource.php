<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Represents an NFS mount that lasts the lifetime of a pod. NFS volumes do not
 * support ownership management or SELinux relabeling.
 */
class NFSVolumeSource extends AbstractModel
{

    /**
     * path that is exported by the NFS server. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#nfs
     *
     * @var string
     */
    public $path = null;

    /**
     * readOnly here will force the NFS export to be mounted with read-only
     * permissions. Defaults to false. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#nfs
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * server is the hostname or IP address of the NFS server. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#nfs
     *
     * @var string
     */
    public $server = null;


}


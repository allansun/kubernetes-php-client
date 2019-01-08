<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Represents an NFS mount that lasts the lifetime of a pod. NFS volumes do not
 * support ownership management or SELinux relabeling.
 */
class NFSVolumeSource extends \Kubernetes\AbstractModel
{

    /**
     * Path that is exported by the NFS server. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#nfs
     *
     * @var string
     */
    public $path = null;

    /**
     * ReadOnly here will force the NFS export to be mounted with read-only
     * permissions. Defaults to false. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#nfs
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * Server is the hostname or IP address of the NFS server. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#nfs
     *
     * @var string
     */
    public $server = null;


}


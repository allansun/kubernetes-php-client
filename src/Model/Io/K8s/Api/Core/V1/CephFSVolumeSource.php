<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Represents a Ceph Filesystem mount that lasts the lifetime of a pod Cephfs
 * volumes do not support ownership management or SELinux relabeling.
 */
class CephFSVolumeSource extends \Kubernetes\AbstractModel
{

    /**
     * Required: Monitors is a collection of Ceph monitors More info:
     * https://releases.k8s.io/HEAD/examples/volumes/cephfs/README.md#how-to-use-it
     *
     * @var string[]
     */
    public $monitors = null;

    /**
     * Optional: Used as the mounted root, rather than the full Ceph tree, default is /
     *
     * @var string
     */
    public $path = null;

    /**
     * Optional: Defaults to false (read/write). ReadOnly here will force the ReadOnly
     * setting in VolumeMounts. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/cephfs/README.md#how-to-use-it
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * Optional: SecretFile is the path to key ring for User, default is
     * /etc/ceph/user.secret More info:
     * https://releases.k8s.io/HEAD/examples/volumes/cephfs/README.md#how-to-use-it
     *
     * @var string
     */
    public $secretFile = null;

    /**
     * Optional: SecretRef is reference to the authentication secret for User, default
     * is empty. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/cephfs/README.md#how-to-use-it
     *
     * @var LocalObjectReference
     */
    public $secretRef = null;

    /**
     * Optional: User is the rados user name, default is admin More info:
     * https://releases.k8s.io/HEAD/examples/volumes/cephfs/README.md#how-to-use-it
     *
     * @var string
     */
    public $user = null;


}


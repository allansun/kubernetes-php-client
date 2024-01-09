<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Represents a Ceph Filesystem mount that lasts the lifetime of a pod Cephfs
 * volumes do not support ownership management or SELinux relabeling.
 */
class CephFSPersistentVolumeSource extends AbstractModel
{
    /**
     * monitors is Required: Monitors is a collection of Ceph monitors More info:
     * https://examples.k8s.io/volumes/cephfs/README.md#how-to-use-it
     *
     * @var string[]
     */
    public $monitors = null;

    /**
     * path is Optional: Used as the mounted root, rather than the full Ceph tree,
     * default is /
     *
     * @var string
     */
    public $path = null;

    /**
     * readOnly is Optional: Defaults to false (read/write). ReadOnly here will force
     * the ReadOnly setting in VolumeMounts. More info:
     * https://examples.k8s.io/volumes/cephfs/README.md#how-to-use-it
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * secretFile is Optional: SecretFile is the path to key ring for User, default is
     * /etc/ceph/user.secret More info:
     * https://examples.k8s.io/volumes/cephfs/README.md#how-to-use-it
     *
     * @var string
     */
    public $secretFile = null;

    /**
     * secretRef is Optional: SecretRef is reference to the authentication secret for
     * User, default is empty. More info:
     * https://examples.k8s.io/volumes/cephfs/README.md#how-to-use-it
     *
     * @var SecretReference
     */
    public $secretRef = null;

    /**
     * user is Optional: User is the rados user name, default is admin More info:
     * https://examples.k8s.io/volumes/cephfs/README.md#how-to-use-it
     *
     * @var string
     */
    public $user = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Represents a Rados Block Device mount that lasts the lifetime of a pod. RBD
 * volumes support ownership management and SELinux relabeling.
 */
class RBDPersistentVolumeSource extends AbstractModel
{

    /**
     * fsType is the filesystem type of the volume that you want to mount. Tip: Ensure
     * that the filesystem type is supported by the host operating system. Examples:
     * "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified. More
     * info: https://kubernetes.io/docs/concepts/storage/volumes#rbd
     *
     * @var string
     */
    public $fsType = null;

    /**
     * image is the rados image name. More info:
     * https://examples.k8s.io/volumes/rbd/README.md#how-to-use-it
     *
     * @var string
     */
    public $image = null;

    /**
     * keyring is the path to key ring for RBDUser. Default is /etc/ceph/keyring. More
     * info: https://examples.k8s.io/volumes/rbd/README.md#how-to-use-it
     *
     * @var string
     */
    public $keyring = null;

    /**
     * monitors is a collection of Ceph monitors. More info:
     * https://examples.k8s.io/volumes/rbd/README.md#how-to-use-it
     *
     * @var string[]
     */
    public $monitors = null;

    /**
     * pool is the rados pool name. Default is rbd. More info:
     * https://examples.k8s.io/volumes/rbd/README.md#how-to-use-it
     *
     * @var string
     */
    public $pool = null;

    /**
     * readOnly here will force the ReadOnly setting in VolumeMounts. Defaults to
     * false. More info: https://examples.k8s.io/volumes/rbd/README.md#how-to-use-it
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * secretRef is name of the authentication secret for RBDUser. If provided
     * overrides keyring. Default is nil. More info:
     * https://examples.k8s.io/volumes/rbd/README.md#how-to-use-it
     *
     * @var SecretReference
     */
    public $secretRef = null;

    /**
     * user is the rados user name. Default is admin. More info:
     * https://examples.k8s.io/volumes/rbd/README.md#how-to-use-it
     *
     * @var string
     */
    public $user = null;


}


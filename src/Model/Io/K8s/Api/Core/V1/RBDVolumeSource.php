<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Represents a Rados Block Device mount that lasts the lifetime of a pod. RBD
 * volumes support ownership management and SELinux relabeling.
 */
class RBDVolumeSource extends \Kubernetes\AbstractModel
{

    /**
     * Filesystem type of the volume that you want to mount. Tip: Ensure that the
     * filesystem type is supported by the host operating system. Examples: "ext4",
     * "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#rbd
     *
     * @var string
     */
    public $fsType = null;

    /**
     * The rados image name. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     *
     * @var string
     */
    public $image = null;

    /**
     * Keyring is the path to key ring for RBDUser. Default is /etc/ceph/keyring. More
     * info: https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     *
     * @var string
     */
    public $keyring = null;

    /**
     * A collection of Ceph monitors. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     *
     * @var string[]
     */
    public $monitors = null;

    /**
     * The rados pool name. Default is rbd. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     *
     * @var string
     */
    public $pool = null;

    /**
     * ReadOnly here will force the ReadOnly setting in VolumeMounts. Defaults to
     * false. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * SecretRef is name of the authentication secret for RBDUser. If provided
     * overrides keyring. Default is nil. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     *
     * @var LocalObjectReference
     */
    public $secretRef = null;

    /**
     * The rados user name. Default is admin. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     *
     * @var string
     */
    public $user = null;


}


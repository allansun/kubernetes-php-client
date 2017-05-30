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
 * Represents a Rados Block Device mount that lasts the lifetime of a pod.
 * RBD volumes support ownership management and SELinux relabeling.
 *
 * @package Kubernetes\Model
 */
class RBDVolumeSource extends AbstractModel
{
    /**
     * @var string
     * Filesystem type of the volume that you want to mount.
     * Tip: Ensure that the filesystem type is supported by the host operating system.
     * Examples: "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified.
     * More info: http://kubernetes.io/docs/user-guide/volumes#rbd
     */
    public $fsType = 'ext4';

    /**
     * @var string
     * The rados image name. More info: http://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     */
    public $image;

    /**
     * @var string
     * Keyring is the path to key ring for RBDUser. Default is /etc/ceph/keyring.
     * More info: http://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     */
    public $keyring = '/etc/ceph/keyring';

    /**
     * @var string[]
     * A collection of Ceph monitors.
     * More info: http://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     */
    public $monitors;

    /**
     * @var string
     * The rados pool name. Default is rbd.
     * More info: http://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it.
     */
    public $pool = 'rbd';

    /**
     * @var boolean
     * ReadOnly here will force the ReadOnly setting in VolumeMounts. Defaults to false.
     * More info: http://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     */
    public $readOnly = false;

    /**
     * @var LocalObjectReference
     * SecretRef is name of the authentication secret for RBDUser. If provided overrides keyring. Default is nil.
     * More info: http://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     */
    public $secretRef = null;

    /**
     * @var string
     * The rados user name. Default is admin.
     * More info: http://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     */
    public $user = 'admin';

    /**
     * @param LocalObjectReference $secretRef
     *
     * @return self
     */
    public function setSecretRef($secretRef)
    {
        $this->secretRef = $this->_createPropertyValue($secretRef, LocalObjectReference::class, false);

        return $this;
    }


}
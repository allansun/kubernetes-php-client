<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Represents a cinder volume resource in Openstack. A Cinder volume must exist
 * before mounting to a container. The volume must also be in the same region as
 * the kubelet. Cinder volumes support ownership management and SELinux relabeling.
 */
class CinderVolumeSource extends AbstractModel
{
    /**
     * fsType is the filesystem type to mount. Must be a filesystem type supported by
     * the host operating system. Examples: "ext4", "xfs", "ntfs". Implicitly inferred
     * to be "ext4" if unspecified. More info:
     * https://examples.k8s.io/mysql-cinder-pd/README.md
     *
     * @var string
     */
    public $fsType = null;

    /**
     * readOnly defaults to false (read/write). ReadOnly here will force the ReadOnly
     * setting in VolumeMounts. More info:
     * https://examples.k8s.io/mysql-cinder-pd/README.md
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * secretRef is optional: points to a secret object containing parameters used to
     * connect to OpenStack.
     *
     * @var LocalObjectReference
     */
    public $secretRef = null;

    /**
     * volumeID used to identify the volume in cinder. More info:
     * https://examples.k8s.io/mysql-cinder-pd/README.md
     *
     * @var string
     */
    public $volumeID = null;
}


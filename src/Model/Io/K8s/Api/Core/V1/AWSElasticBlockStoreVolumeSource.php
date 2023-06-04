<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Represents a Persistent Disk resource in AWS.
 *
 * An AWS EBS disk must exist before mounting to a container. The disk must also be
 * in the same AWS zone as the kubelet. An AWS EBS disk can only be mounted as
 * read/write once. AWS EBS volumes support ownership management and SELinux
 * relabeling.
 */
class AWSElasticBlockStoreVolumeSource extends AbstractModel
{

    /**
     * fsType is the filesystem type of the volume that you want to mount. Tip: Ensure
     * that the filesystem type is supported by the host operating system. Examples:
     * "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified. More
     * info: https://kubernetes.io/docs/concepts/storage/volumes#awselasticblockstore
     *
     * @var string
     */
    public $fsType = null;

    /**
     * partition is the partition in the volume that you want to mount. If omitted, the
     * default is to mount by volume name. Examples: For volume /dev/sda1, you specify
     * the partition as "1". Similarly, the volume partition for /dev/sda is "0" (or
     * you can leave the property empty).
     *
     * @var integer
     */
    public $partition = null;

    /**
     * readOnly value true will force the readOnly setting in VolumeMounts. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#awselasticblockstore
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * volumeID is unique ID of the persistent disk resource in AWS (Amazon EBS
     * volume). More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#awselasticblockstore
     *
     * @var string
     */
    public $volumeID = null;


}


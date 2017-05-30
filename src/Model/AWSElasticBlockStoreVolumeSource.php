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
 * Class AWSElasticBlockStoreVolumeSource
 *
 * @package Kubernetes\Model
 *
 * Represents a Persistent Disk resource in AWS.
 *
 * An AWS EBS disk must exist before mounting to a container.
 * The disk must also be in the same AWS zone as the kubelet.
 * An AWS EBS disk can only be mounted as read/write once.
 * AWS EBS volumes support ownership management and SELinux relabeling.
 */
class AWSElasticBlockStoreVolumeSource extends AbstractModel
{
    /**
     * @var string
     *
     * Filesystem type of the volume that you want to mount.
     * Tip: Ensure that the filesystem type is supported by the host operating system.
     * Examples: "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified.
     * More info: http://kubernetes.io/docs/user-guide/volumes#awselasticblockstore
     */
    public $fsType = 'ext4';

    /**
     * @var int
     *
     * The partition in the volume that you want to mount.
     * If omitted, the default is to mount by volume name.
     * Examples: For volume /dev/sda1, you specify the partition as "1".
     * Similarly, the volume partition for /dev/sda is "0" (or you can leave the property empty).
     */
    public $partition;

    /**
     * @var boolean
     *
     * Specify "true" to force and set the ReadOnly property in VolumeMounts to "true".
     * If omitted, the default is "false".
     * More info: http://kubernetes.io/docs/user-guide/volumes#awselasticblockstore
     */
    public $readOnly = false;

    /**
     * @var string
     *
     * Unique ID of the persistent disk resource in AWS (Amazon EBS volume).
     * More info: http://kubernetes.io/docs/user-guide/volumes#awselasticblockstore
     */
    public $volumeID;
}
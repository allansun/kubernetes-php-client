<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Represents an ISCSI disk. ISCSI volumes can only be mounted as read/write once.
 * ISCSI volumes support ownership management and SELinux relabeling.
 */
class ISCSIVolumeSource extends AbstractModel
{

    /**
     * chapAuthDiscovery defines whether support iSCSI Discovery CHAP authentication
     *
     * @var boolean
     */
    public $chapAuthDiscovery = null;

    /**
     * chapAuthSession defines whether support iSCSI Session CHAP authentication
     *
     * @var boolean
     */
    public $chapAuthSession = null;

    /**
     * fsType is the filesystem type of the volume that you want to mount. Tip: Ensure
     * that the filesystem type is supported by the host operating system. Examples:
     * "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified. More
     * info: https://kubernetes.io/docs/concepts/storage/volumes#iscsi
     *
     * @var string
     */
    public $fsType = null;

    /**
     * initiatorName is the custom iSCSI Initiator Name. If initiatorName is specified
     * with iscsiInterface simultaneously, new iSCSI interface <target portal>:<volume
     * name> will be created for the connection.
     *
     * @var string
     */
    public $initiatorName = null;

    /**
     * iqn is the target iSCSI Qualified Name.
     *
     * @var string
     */
    public $iqn = null;

    /**
     * iscsiInterface is the interface Name that uses an iSCSI transport. Defaults to
     * 'default' (tcp).
     *
     * @var string
     */
    public $iscsiInterface = null;

    /**
     * lun represents iSCSI Target Lun number.
     *
     * @var integer
     */
    public $lun = null;

    /**
     * portals is the iSCSI Target Portal List. The portal is either an IP or
     * ip_addr:port if the port is other than default (typically TCP ports 860 and
     * 3260).
     *
     * @var string[]
     */
    public $portals = null;

    /**
     * readOnly here will force the ReadOnly setting in VolumeMounts. Defaults to
     * false.
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * secretRef is the CHAP Secret for iSCSI target and initiator authentication
     *
     * @var LocalObjectReference
     */
    public $secretRef = null;

    /**
     * targetPortal is iSCSI Target Portal. The Portal is either an IP or ip_addr:port
     * if the port is other than default (typically TCP ports 860 and 3260).
     *
     * @var string
     */
    public $targetPortal = null;


}


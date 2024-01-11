<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Volume represents a named volume in a pod that may be accessed by any container
 * in the pod.
 */
class Volume extends AbstractModel
{
    /**
     * awsElasticBlockStore represents an AWS Disk resource that is attached to a
     * kubelet's host machine and then exposed to the pod. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#awselasticblockstore
     *
     * @var AWSElasticBlockStoreVolumeSource
     */
    public $awsElasticBlockStore = null;

    /**
     * azureDisk represents an Azure Data Disk mount on the host and bind mount to the
     * pod.
     *
     * @var AzureDiskVolumeSource
     */
    public $azureDisk = null;

    /**
     * azureFile represents an Azure File Service mount on the host and bind mount to
     * the pod.
     *
     * @var AzureFileVolumeSource
     */
    public $azureFile = null;

    /**
     * cephFS represents a Ceph FS mount on the host that shares a pod's lifetime
     *
     * @var CephFSVolumeSource
     */
    public $cephfs = null;

    /**
     * cinder represents a cinder volume attached and mounted on kubelets host machine.
     * More info: https://examples.k8s.io/mysql-cinder-pd/README.md
     *
     * @var CinderVolumeSource
     */
    public $cinder = null;

    /**
     * configMap represents a configMap that should populate this volume
     *
     * @var ConfigMapVolumeSource
     */
    public $configMap = null;

    /**
     * csi (Container Storage Interface) represents ephemeral storage that is handled
     * by certain external CSI drivers (Beta feature).
     *
     * @var CSIVolumeSource
     */
    public $csi = null;

    /**
     * downwardAPI represents downward API about the pod that should populate this
     * volume
     *
     * @var DownwardAPIVolumeSource
     */
    public $downwardAPI = null;

    /**
     * emptyDir represents a temporary directory that shares a pod's lifetime. More
     * info: https://kubernetes.io/docs/concepts/storage/volumes#emptydir
     *
     * @var EmptyDirVolumeSource
     */
    public $emptyDir = null;

    /**
     * ephemeral represents a volume that is handled by a cluster storage driver. The
     * volume's lifecycle is tied to the pod that defines it - it will be created
     * before the pod starts, and deleted when the pod is removed.
     *
     * Use this if: a) the volume is only needed while the pod runs, b) features of
     * normal volumes like restoring from snapshot or capacity
     *    tracking are needed,
     * c) the storage driver is specified through a storage class, and d) the storage
     * driver supports dynamic volume provisioning through
     *    a PersistentVolumeClaim (see EphemeralVolumeSource for more
     *    information on the connection between this volume type
     *    and PersistentVolumeClaim).
     *
     * Use PersistentVolumeClaim or one of the vendor-specific APIs for volumes that
     * persist for longer than the lifecycle of an individual pod.
     *
     * Use CSI for light-weight local ephemeral volumes if the CSI driver is meant to
     * be used that way - see the documentation of the driver for more information.
     *
     * A pod can use both types of ephemeral volumes and persistent volumes at the same
     * time.
     *
     * @var EphemeralVolumeSource
     */
    public $ephemeral = null;

    /**
     * fc represents a Fibre Channel resource that is attached to a kubelet's host
     * machine and then exposed to the pod.
     *
     * @var FCVolumeSource
     */
    public $fc = null;

    /**
     * flexVolume represents a generic volume resource that is provisioned/attached
     * using an exec based plugin.
     *
     * @var FlexVolumeSource
     */
    public $flexVolume = null;

    /**
     * flocker represents a Flocker volume attached to a kubelet's host machine. This
     * depends on the Flocker control service being running
     *
     * @var FlockerVolumeSource
     */
    public $flocker = null;

    /**
     * gcePersistentDisk represents a GCE Disk resource that is attached to a kubelet's
     * host machine and then exposed to the pod. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#gcepersistentdisk
     *
     * @var GCEPersistentDiskVolumeSource
     */
    public $gcePersistentDisk = null;

    /**
     * gitRepo represents a git repository at a particular revision. DEPRECATED:
     * GitRepo is deprecated. To provision a container with a git repo, mount an
     * EmptyDir into an InitContainer that clones the repo using git, then mount the
     * EmptyDir into the Pod's container.
     *
     * @var GitRepoVolumeSource
     */
    public $gitRepo = null;

    /**
     * glusterfs represents a Glusterfs mount on the host that shares a pod's lifetime.
     * More info: https://examples.k8s.io/volumes/glusterfs/README.md
     *
     * @var GlusterfsVolumeSource
     */
    public $glusterfs = null;

    /**
     * hostPath represents a pre-existing file or directory on the host machine that is
     * directly exposed to the container. This is generally used for system agents or
     * other privileged things that are allowed to see the host machine. Most
     * containers will NOT need this. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#hostpath
     *
     * @var HostPathVolumeSource
     */
    public $hostPath = null;

    /**
     * iscsi represents an ISCSI Disk resource that is attached to a kubelet's host
     * machine and then exposed to the pod. More info:
     * https://examples.k8s.io/volumes/iscsi/README.md
     *
     * @var ISCSIVolumeSource
     */
    public $iscsi = null;

    /**
     * name of the volume. Must be a DNS_LABEL and unique within the pod. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     *
     * @var string
     */
    public $name = null;

    /**
     * nfs represents an NFS mount on the host that shares a pod's lifetime More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#nfs
     *
     * @var NFSVolumeSource
     */
    public $nfs = null;

    /**
     * persistentVolumeClaimVolumeSource represents a reference to a
     * PersistentVolumeClaim in the same namespace. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#persistentvolumeclaims
     *
     * @var PersistentVolumeClaimVolumeSource
     */
    public $persistentVolumeClaim = null;

    /**
     * photonPersistentDisk represents a PhotonController persistent disk attached and
     * mounted on kubelets host machine
     *
     * @var PhotonPersistentDiskVolumeSource
     */
    public $photonPersistentDisk = null;

    /**
     * portworxVolume represents a portworx volume attached and mounted on kubelets
     * host machine
     *
     * @var PortworxVolumeSource
     */
    public $portworxVolume = null;

    /**
     * projected items for all in one resources secrets, configmaps, and downward API
     *
     * @var ProjectedVolumeSource
     */
    public $projected = null;

    /**
     * quobyte represents a Quobyte mount on the host that shares a pod's lifetime
     *
     * @var QuobyteVolumeSource
     */
    public $quobyte = null;

    /**
     * rbd represents a Rados Block Device mount on the host that shares a pod's
     * lifetime. More info: https://examples.k8s.io/volumes/rbd/README.md
     *
     * @var RBDVolumeSource
     */
    public $rbd = null;

    /**
     * scaleIO represents a ScaleIO persistent volume attached and mounted on
     * Kubernetes nodes.
     *
     * @var ScaleIOVolumeSource
     */
    public $scaleIO = null;

    /**
     * secret represents a secret that should populate this volume. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#secret
     *
     * @var SecretVolumeSource
     */
    public $secret = null;

    /**
     * storageOS represents a StorageOS volume attached and mounted on Kubernetes
     * nodes.
     *
     * @var StorageOSVolumeSource
     */
    public $storageos = null;

    /**
     * vsphereVolume represents a vSphere volume attached and mounted on kubelets host
     * machine
     *
     * @var VsphereVirtualDiskVolumeSource
     */
    public $vsphereVolume = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Volume represents a named volume in a pod that may be accessed by any container
 * in the pod.
 */
class Volume extends \Kubernetes\AbstractModel
{

    /**
     * AWSElasticBlockStore represents an AWS Disk resource that is attached to a
     * kubelet's host machine and then exposed to the pod. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#awselasticblockstore
     *
     * @var AWSElasticBlockStoreVolumeSource
     */
    public $awsElasticBlockStore = null;

    /**
     * AzureDisk represents an Azure Data Disk mount on the host and bind mount to the
     * pod.
     *
     * @var AzureDiskVolumeSource
     */
    public $azureDisk = null;

    /**
     * AzureFile represents an Azure File Service mount on the host and bind mount to
     * the pod.
     *
     * @var AzureFileVolumeSource
     */
    public $azureFile = null;

    /**
     * CephFS represents a Ceph FS mount on the host that shares a pod's lifetime
     *
     * @var CephFSVolumeSource
     */
    public $cephfs = null;

    /**
     * Cinder represents a cinder volume attached and mounted on kubelets host machine
     * More info: https://releases.k8s.io/HEAD/examples/mysql-cinder-pd/README.md
     *
     * @var CinderVolumeSource
     */
    public $cinder = null;

    /**
     * ConfigMap represents a configMap that should populate this volume
     *
     * @var ConfigMapVolumeSource
     */
    public $configMap = null;

    /**
     * DownwardAPI represents downward API about the pod that should populate this
     * volume
     *
     * @var DownwardAPIVolumeSource
     */
    public $downwardAPI = null;

    /**
     * EmptyDir represents a temporary directory that shares a pod's lifetime. More
     * info: https://kubernetes.io/docs/concepts/storage/volumes#emptydir
     *
     * @var EmptyDirVolumeSource
     */
    public $emptyDir = null;

    /**
     * FC represents a Fibre Channel resource that is attached to a kubelet's host
     * machine and then exposed to the pod.
     *
     * @var FCVolumeSource
     */
    public $fc = null;

    /**
     * FlexVolume represents a generic volume resource that is provisioned/attached
     * using an exec based plugin.
     *
     * @var FlexVolumeSource
     */
    public $flexVolume = null;

    /**
     * Flocker represents a Flocker volume attached to a kubelet's host machine. This
     * depends on the Flocker control service being running
     *
     * @var FlockerVolumeSource
     */
    public $flocker = null;

    /**
     * GCEPersistentDisk represents a GCE Disk resource that is attached to a kubelet's
     * host machine and then exposed to the pod. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#gcepersistentdisk
     *
     * @var GCEPersistentDiskVolumeSource
     */
    public $gcePersistentDisk = null;

    /**
     * GitRepo represents a git repository at a particular revision.
     *
     * @var GitRepoVolumeSource
     */
    public $gitRepo = null;

    /**
     * Glusterfs represents a Glusterfs mount on the host that shares a pod's lifetime.
     * More info: https://releases.k8s.io/HEAD/examples/volumes/glusterfs/README.md
     *
     * @var GlusterfsVolumeSource
     */
    public $glusterfs = null;

    /**
     * HostPath represents a pre-existing file or directory on the host machine that is
     * directly exposed to the container. This is generally used for system agents or
     * other privileged things that are allowed to see the host machine. Most
     * containers will NOT need this. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#hostpath
     *
     * @var HostPathVolumeSource
     */
    public $hostPath = null;

    /**
     * ISCSI represents an ISCSI Disk resource that is attached to a kubelet's host
     * machine and then exposed to the pod. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/iscsi/README.md
     *
     * @var ISCSIVolumeSource
     */
    public $iscsi = null;

    /**
     * Volume's name. Must be a DNS_LABEL and unique within the pod. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     *
     * @var string
     */
    public $name = null;

    /**
     * NFS represents an NFS mount on the host that shares a pod's lifetime More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#nfs
     *
     * @var NFSVolumeSource
     */
    public $nfs = null;

    /**
     * PersistentVolumeClaimVolumeSource represents a reference to a
     * PersistentVolumeClaim in the same namespace. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#persistentvolumeclaims
     *
     * @var PersistentVolumeClaimVolumeSource
     */
    public $persistentVolumeClaim = null;

    /**
     * PhotonPersistentDisk represents a PhotonController persistent disk attached and
     * mounted on kubelets host machine
     *
     * @var PhotonPersistentDiskVolumeSource
     */
    public $photonPersistentDisk = null;

    /**
     * PortworxVolume represents a portworx volume attached and mounted on kubelets
     * host machine
     *
     * @var PortworxVolumeSource
     */
    public $portworxVolume = null;

    /**
     * Items for all in one resources secrets, configmaps, and downward API
     *
     * @var ProjectedVolumeSource
     */
    public $projected = null;

    /**
     * Quobyte represents a Quobyte mount on the host that shares a pod's lifetime
     *
     * @var QuobyteVolumeSource
     */
    public $quobyte = null;

    /**
     * RBD represents a Rados Block Device mount on the host that shares a pod's
     * lifetime. More info: https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md
     *
     * @var RBDVolumeSource
     */
    public $rbd = null;

    /**
     * ScaleIO represents a ScaleIO persistent volume attached and mounted on
     * Kubernetes nodes.
     *
     * @var ScaleIOVolumeSource
     */
    public $scaleIO = null;

    /**
     * Secret represents a secret that should populate this volume. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#secret
     *
     * @var SecretVolumeSource
     */
    public $secret = null;

    /**
     * StorageOS represents a StorageOS volume attached and mounted on Kubernetes
     * nodes.
     *
     * @var StorageOSVolumeSource
     */
    public $storageos = null;

    /**
     * VsphereVolume represents a vSphere volume attached and mounted on kubelets host
     * machine
     *
     * @var VsphereVirtualDiskVolumeSource
     */
    public $vsphereVolume = null;


}


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


class PersistentVolumeSpec extends AbstractModel
{

    /**
     * @var string[]
     * AccessModes contains all ways the volume can be mounted. More info:
     * http://kubernetes.io/docs/user-guide/persistent-volumes#access-modes
     */
    public $accessModes;

    /**
     * @var AWSElasticBlockStoreVolumeSource
     */
    public $awsElasticBlockStore;

    /**
     * @var AzureDiskVolumeSource
     */
    public $azureDisk;

    /**
     * @var AzureFileVolumeSource
     */
    public $azureFile;

    /**
     * @var \StdClass
     * A description of the persistent volume's resources and capacity. More info:
     * http://kubernetes.io/docs/user-guide/persistent-volumes#capacity
     */
    public $capacity;

    /**
     * @var CephFSVolumeSource
     */
    public $cephfs;

    /**
     * @var CinderVolumeSource
     */
    public $cinder;

    /**
     * @var ObjectReference
     * ClaimRef is part of a bi-directional binding between PersistentVolume and PersistentVolumeClaim. Expected to be
     * non-nil when bound. claim.VolumeName is the authoritative bind between PV and PVC. More info:
     * http://kubernetes.io/docs/user-guide/persistent-volumes#binding
     */
    public $claimRef;


    /**
     * @var FCVolumeSource
     */
    public $fc;

    /**
     * @var FlexVolumeSource
     */
    public $flexVolume;

    /**
     * @var FlockerVolumeSource
     */
    public $flocker;

    /**
     * @var GCEPersistentDiskVolumeSource
     */
    public $gcePersistentDisk;

    /**
     * @var GlusterfsVolumeSource
     */
    public $glusterfs;

    /**
     * @var HostPathVolumeSource
     */
    public $hostPath;

    /**
     * @var ISCSIVolumeSource
     */
    public $iscsi;

    /**
     * @var string
     */
    public $name;

    /**
     * @var NFSVolumeSource
     */
    public $nfs;

    /**
     * @var string
     * What happens to a persistent volume when released from its claim. Valid options are Retain (default) and
     * Recycle. Recycling must be supported by the volume plugin underlying this persistent volume. More info:
     * http://kubernetes.io/docs/user-guide/persistent-volumes#recycling-policy
     */
    public $persistentVolumeReclaimPolicy;

    /**
     * @var PhotonPersistentDiskVolumeSource
     */
    public $photonPersistentDisk;

    /**
     * @var PortworxVolumeSource
     */
    public $portworxVolume;

    /**
     * @var QuobyteVolumeSource
     */
    public $quobyte;

    /**
     * @var RBDVolumeSource
     */
    public $rbd;

    /**
     * @var ScaleIOVolumeSource
     */
    public $scaleIO;


    /**
     * @var string
     * Name of StorageClass to which this persistent volume belongs. Empty value means that this volume does not belong
     * to any StorageClass.
     */
    public $storageClassName;

    /**
     * @var VsphereVirtualDiskVolumeSource
     */
    public $vsphereVolume;

    /**
     * @param AWSElasticBlockStoreVolumeSource $awsElasticBlockStore
     *
     * @return self
     */
    public function setAwsElasticBlockStore($awsElasticBlockStore)
    {
        $this->awsElasticBlockStore =
            $this->_createPropertyValue($awsElasticBlockStore, AWSElasticBlockStoreVolumeSource::class, false);

        return $this;
    }

    /**
     * @param AzureDiskVolumeSource $azureDisk
     *
     * @return self
     */
    public function setAzureDisk($azureDisk)
    {
        $this->azureDisk = $this->_createPropertyValue($azureDisk, AzureDiskVolumeSource::class, false);

        return $this;
    }

    /**
     * @param AzureFileVolumeSource $azureFile
     *
     * @return self
     */
    public function setAzureFile($azureFile)
    {
        $this->azureFile = $this->_createPropertyValue($azureFile, AzureFileVolumeSource::class, false);

        return $this;
    }

    /**
     * @param CephFSVolumeSource $cephfs
     *
     * @return self
     */
    public function setCephfs($cephfs)
    {
        $this->cephfs = $this->_createPropertyValue($cephfs, CephFSVolumeSource::class, false);

        return $this;
    }

    /**
     * @param CinderVolumeSource $cinder
     *
     * @return self
     */
    public function setCinder($cinder)
    {
        $this->cinder = $this->_createPropertyValue($cinder, CinderVolumeSource::class, false);

        return $this;
    }

    /**
     * @param ObjectReference $claimRef
     *
     * @return self
     */
    public function setClaimRef($claimRef)
    {
        $this->claimRef = $this->_createPropertyValue($claimRef, ObjectReference::class, false);

        return $this;
    }

    /**
     * @param FCVolumeSource $fc
     *
     * @return self
     */
    public function setFc($fc)
    {
        $this->fc = $this->_createPropertyValue($fc, FCVolumeSource::class, false);

        return $this;
    }

    /**
     * @param FlexVolumeSource $flexVolume
     *
     * @return self
     */
    public function setFlexVolume($flexVolume)
    {
        $this->flexVolume = $this->_createPropertyValue($flexVolume, FlexVolumeSource::class, false);

        return $this;
    }

    /**
     * @param FlockerVolumeSource $flocker
     *
     * @return self
     */
    public function setFlocker($flocker)
    {
        $this->flocker = $this->_createPropertyValue($flocker, FlockerVolumeSource::class, false);

        return $this;
    }

    /**
     * @param GCEPersistentDiskVolumeSource $gcePersistentDisk
     *
     * @return self
     */
    public function setGcePersistentDisk($gcePersistentDisk)
    {
        $this->gcePersistentDisk =
            $this->_createPropertyValue($gcePersistentDisk, GCEPersistentDiskVolumeSource::class, false);

        return $this;
    }

    /**
     * @param GlusterfsVolumeSource $glusterfs
     *
     * @return self
     */
    public function setGlusterfs($glusterfs)
    {
        $this->glusterfs = $this->_createPropertyValue($glusterfs, GlusterfsVolumeSource::class, false);

        return $this;
    }

    /**
     * @param HostPathVolumeSource $hostPath
     *
     * @return self
     */
    public function setHostPath($hostPath)
    {
        $this->hostPath = $this->_createPropertyValue($hostPath, HostPathVolumeSource::class, false);

        return $this;
    }

    /**
     * @param ISCSIVolumeSource $iscsi
     *
     * @return self
     */
    public function setIscsi($iscsi)
    {
        $this->iscsi = $this->_createPropertyValue($iscsi, ISCSIVolumeSource::class, false);

        return $this;
    }


    /**
     * @param NFSVolumeSource $nfs
     *
     * @return self
     */
    public function setNfs($nfs)
    {
        $this->nfs = $this->_createPropertyValue($nfs, NFSVolumeSource::class, false);

        return $this;
    }

    /**
     * @param PhotonPersistentDiskVolumeSource $photonPersistentDisk
     *
     * @return self
     */
    public function setPhotonPersistentDisk($photonPersistentDisk)
    {
        $this->photonPersistentDisk =
            $this->_createPropertyValue($photonPersistentDisk, PhotonPersistentDiskVolumeSource::class, false);

        return $this;
    }

    /**
     * @param PortworxVolumeSource $portworxVolume
     *
     * @return self
     */
    public function setPortworxVolume($portworxVolume)
    {
        $this->portworxVolume = $this->_createPropertyValue($portworxVolume, PortworxVolumeSource::class, false);

        return $this;
    }

    /**
     * @param QuobyteVolumeSource $quobyte
     *
     * @return self
     */
    public function setQuobyte($quobyte)
    {
        $this->quobyte = $this->_createPropertyValue($quobyte, QuobyteVolumeSource::class, false);

        return $this;
    }

    /**
     * @param RBDVolumeSource $rbd
     *
     * @return self
     */
    public function setRbd($rbd)
    {
        $this->rbd = $this->_createPropertyValue($rbd, RBDVolumeSource::class, false);

        return $this;
    }

    /**
     * @param ScaleIOVolumeSource $scaleIO
     *
     * @return self
     */
    public function setScaleIO($scaleIO)
    {
        $this->scaleIO = $this->_createPropertyValue($scaleIO, ScaleIOVolumeSource::class, false);

        return $this;
    }

    /**
     * @param VsphereVirtualDiskVolumeSource $vsphereVolume
     *
     * @return self
     */
    public function setVsphereVolume($vsphereVolume)
    {
        $this->vsphereVolume =
            $this->_createPropertyValue($vsphereVolume, VsphereVirtualDiskVolumeSource::class, false);

        return $this;
    }

}
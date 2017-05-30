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
 * Volume represents a named volume in a pod that may be accessed by any container in the pod.
 *
 * @package Kubernetes\Model
 */
class Volume extends AbstractModel
{
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
     * @var CephFSVolumeSource
     */
    public $cephfs;

    /**
     * @var CinderVolumeSource
     */
    public $cinder;

    /**
     * @var ConfigMapVolumeSource
     */
    public $configMap;

    /**
     * @var DownwardAPIVolumeSource
     */
    public $downwardAPI;

    /**
     * @var EmptyDirVolumeSource
     */
    public $emptyDir;

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
     * @var GitRepoVolumeSource
     */
    public $gitRepo;

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
     * @var PersistentVolumeClaimVolumeSource
     */
    public $persistentVolumeClaim;

    /**
     * @var PhotonPersistentDiskVolumeSource
     */
    public $photonPersistentDisk;

    /**
     * @var PortworxVolumeSource
     */
    public $portworxVolume;

    /**
     * @var ProjectedVolumeSource
     */
    public $projected;

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
     * @var SecretVolumeSource
     */
    public $secret;

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
     * @param ConfigMapVolumeSource $configMap
     *
     * @return self
     */
    public function setConfigMap($configMap)
    {
        $this->configMap = $this->_createPropertyValue($configMap, ConfigMapVolumeSource::class, false);

        return $this;
    }

    /**
     * @param DownwardAPIVolumeSource $downwardAPI
     *
     * @return self
     */
    public function setDownwardAPI($downwardAPI)
    {
        $this->downwardAPI = $this->_createPropertyValue($downwardAPI, DownwardAPIVolumeSource::class, false);

        return $this;
    }

    /**
     * @param EmptyDirVolumeSource $emptyDir
     *
     * @return self
     */
    public function setEmptyDir($emptyDir)
    {
        $this->emptyDir = $this->_createPropertyValue($emptyDir, EmptyDirVolumeSource::class, false);

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
     * @param GitRepoVolumeSource $gitRepo
     *
     * @return self
     */
    public function setGitRepo($gitRepo)
    {
        $this->gitRepo = $this->_createPropertyValue($gitRepo, GitRepoVolumeSource::class, false);

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
     * @param PersistentVolumeClaimVolumeSource $persistentVolumeClaim
     *
     * @return self
     */
    public function setPersistentVolumeClaim($persistentVolumeClaim)
    {
        $this->persistentVolumeClaim =
            $this->_createPropertyValue($persistentVolumeClaim, PersistentVolumeClaimVolumeSource::class, false);

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
     * @param ProjectedVolumeSource $projected
     *
     * @return self
     */
    public function setProjected($projected)
    {
        $this->projected = $this->_createPropertyValue($projected, ProjectedVolumeSource::class, false);

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
     * @param SecretVolumeSource $secret
     *
     * @return self
     */
    public function setSecret($secret)
    {
        $this->secret = $this->_createPropertyValue($secret, SecretVolumeSource::class, false);

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
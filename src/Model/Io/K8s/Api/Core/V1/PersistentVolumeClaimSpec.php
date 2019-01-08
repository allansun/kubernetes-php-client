<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * PersistentVolumeClaimSpec describes the common attributes of storage devices and
 * allows a Source for provider-specific attributes
 */
class PersistentVolumeClaimSpec extends \Kubernetes\AbstractModel
{

    /**
     * AccessModes contains the desired access modes the volume should have. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes-1
     *
     * @var string[]
     */
    public $accessModes = null;

    /**
     * This field requires the VolumeSnapshotDataSource alpha feature gate to be
     * enabled and currently VolumeSnapshot is the only supported data source. If the
     * provisioner can support VolumeSnapshot data source, it will create a new volume
     * and data will be restored to the volume at the same time. If the provisioner
     * does not support VolumeSnapshot data source, volume will not be created and the
     * failure will be reported as an event. In the future, we plan to support more
     * data source types and the behavior of the provisioner may change.
     *
     * @var TypedLocalObjectReference
     */
    public $dataSource = null;

    /**
     * Resources represents the minimum resources the volume should have. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#resources
     *
     * @var ResourceRequirements
     */
    public $resources = null;

    /**
     * A label query over volumes to consider for binding.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $selector = null;

    /**
     * Name of the StorageClass required by the claim. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#class-1
     *
     * @var string
     */
    public $storageClassName = null;

    /**
     * volumeMode defines what type of volume is required by the claim. Value of
     * Filesystem is implied when not included in claim spec. This is an alpha feature
     * and may change in the future.
     *
     * @var string
     */
    public $volumeMode = null;

    /**
     * VolumeName is the binding reference to the PersistentVolume backing this claim.
     *
     * @var string
     */
    public $volumeName = null;


}


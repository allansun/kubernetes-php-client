<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * PersistentVolumeClaimSpec describes the common attributes of storage devices and
 * allows a Source for provider-specific attributes
 */
class PersistentVolumeClaimSpec extends AbstractModel
{

    /**
     * AccessModes contains the desired access modes the volume should have. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes-1
     *
     * @var string[]
     */
    public $accessModes = null;

    /**
     * This field can be used to specify either: * An existing VolumeSnapshot object
     * (snapshot.storage.k8s.io/VolumeSnapshot) * An existing PVC
     * (PersistentVolumeClaim) * An existing custom resource that implements data
     * population (Alpha) In order to use custom resource types that implement data
     * population, the AnyVolumeDataSource feature gate must be enabled. If the
     * provisioner or an external controller can support the specified data source, it
     * will create a new volume based on the contents of the specified data source.
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
     * Filesystem is implied when not included in claim spec.
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


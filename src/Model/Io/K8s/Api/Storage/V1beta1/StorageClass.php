<?php

namespace Kubernetes\Model\Io\K8s\Api\Storage\V1beta1;

/**
 * StorageClass describes the parameters for a class of storage for which
 * PersistentVolumes can be dynamically provisioned.
 *
 * StorageClasses are non-namespaced; the name of the storage class according to
 * etcd is in ObjectMeta.Name.
 */
class StorageClass extends \Kubernetes\AbstractModel
{

    /**
     * AllowVolumeExpansion shows whether the storage class allow volume expand
     *
     * @var boolean
     */
    public $allowVolumeExpansion = null;

    /**
     * Restrict the node topologies where volumes can be dynamically provisioned. Each
     * volume plugin defines its own supported topology specifications. An empty
     * TopologySelectorTerm list means there is no topology restriction. This field is
     * only honored by servers that enable the VolumeScheduling feature.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\TopologySelectorTerm[]
     */
    public $allowedTopologies = null;

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'storage.k8s.io/v1beta1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'StorageClass';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Dynamically provisioned PersistentVolumes of this storage class are created with
     * these mountOptions, e.g. ["ro", "soft"]. Not validated - mount of the PVs will
     * simply fail if one is invalid.
     *
     * @var string[]
     */
    public $mountOptions = null;

    /**
     * Parameters holds the parameters for the provisioner that should create volumes
     * of this storage class.
     *
     * @var object
     */
    public $parameters = null;

    /**
     * Provisioner indicates the type of the provisioner.
     *
     * @var string
     */
    public $provisioner = null;

    /**
     * Dynamically provisioned PersistentVolumes of this storage class are created with
     * this reclaimPolicy. Defaults to Delete.
     *
     * @var string
     */
    public $reclaimPolicy = null;

    /**
     * VolumeBindingMode indicates how PersistentVolumeClaims should be provisioned and
     * bound.  When unset, VolumeBindingImmediate is used. This field is only honored
     * by servers that enable the VolumeScheduling feature.
     *
     * @var string
     */
    public $volumeBindingMode = null;


}


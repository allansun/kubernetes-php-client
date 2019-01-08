<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * PersistentVolume (PV) is a storage resource provisioned by an administrator. It
 * is analogous to a node. More info:
 * https://kubernetes.io/docs/concepts/storage/persistent-volumes
 */
class PersistentVolume extends \Kubernetes\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'v1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'PersistentVolume';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Spec defines a specification of a persistent volume owned by the cluster.
     * Provisioned by an administrator. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#persistent-volumes
     *
     * @var PersistentVolumeSpec
     */
    public $spec = null;

    /**
     * Status represents the current information/status for the persistent volume.
     * Populated by the system. Read-only. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#persistent-volumes
     *
     * @var PersistentVolumeStatus
     */
    public $status = null;


}


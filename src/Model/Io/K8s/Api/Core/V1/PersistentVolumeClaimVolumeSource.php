<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * PersistentVolumeClaimVolumeSource references the user's PVC in the same
 * namespace. This volume finds the bound PV and mounts that volume for the pod. A
 * PersistentVolumeClaimVolumeSource is, essentially, a wrapper around another type
 * of volume that is owned by someone else (the system).
 */
class PersistentVolumeClaimVolumeSource extends \Kubernetes\AbstractModel
{

    /**
     * ClaimName is the name of a PersistentVolumeClaim in the same namespace as the
     * pod using this volume. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#persistentvolumeclaims
     *
     * @var string
     */
    public $claimName = null;

    /**
     * Will force the ReadOnly setting in VolumeMounts. Default false.
     *
     * @var boolean
     */
    public $readOnly = null;


}


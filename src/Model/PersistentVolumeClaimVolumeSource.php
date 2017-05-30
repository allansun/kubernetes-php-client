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
 * PersistentVolumeClaimVolumeSource references the user's PVC in the same namespace.
 * This volume finds the bound PV and mounts that volume for the pod.
 * A PersistentVolumeClaimVolumeSource is, essentially, a wrapper around another type of volume that is owned
 * by someone else (the system).
 *
 * @package Kubernetes\Model
 */
class PersistentVolumeClaimVolumeSource extends AbstractModel
{
    /**
     * @var string
     * ClaimName is the name of a PersistentVolumeClaim in the same namespace as the pod using this volume.
     * More info: http://kubernetes.io/docs/user-guide/persistent-volumes#persistentvolumeclaims
     */
    public $claimName;

    /**
     * @var boolean
     * Will force the ReadOnly setting in VolumeMounts. Default false.
     */
    public $readOnly = false;

}
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


class ReplicaSePersistentVolumeClaimStatustStatus extends AbstractModel
{

    /**
     * @var string[]
     * AccessModes contains the actual access modes the volume backing the PVC has. More info:
     * http://kubernetes.io/docs/user-guide/persistent-volumes#access-modes-1
     */
    public $accessModes;

    /**
     * @var \StdClass
     * Represents the actual resources of the underlying volume.
     */
    public $capacity;

    /**
     * @var string
     * Phase represents the current phase of PersistentVolumeClaim.
     */
    public $phase;
}
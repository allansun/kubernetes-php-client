<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ModifyVolumeStatus represents the status object of ControllerModifyVolume
 * operation
 */
class ModifyVolumeStatus extends AbstractModel
{
    /**
     * status is the status of the ControllerModifyVolume operation. It can be in any
     * of following states:
     *  - Pending
     *    Pending indicates that the PersistentVolumeClaim cannot be modified due to
     * unmet requirements, such as
     *    the specified VolumeAttributesClass not existing.
     *  - InProgress
     *    InProgress indicates that the volume is being modified.
     *  - Infeasible
     *   Infeasible indicates that the request has been rejected as invalid by the CSI
     * driver. To
     * 	  resolve the error, a valid VolumeAttributesClass needs to be specified.
     * Note: New statuses can be added in the future. Consumers should check for
     * unknown statuses and fail appropriately.
     *
     * @var string
     */
    public $status = null;

    /**
     * targetVolumeAttributesClassName is the name of the VolumeAttributesClass the PVC
     * currently being reconciled
     *
     * @var string
     */
    public $targetVolumeAttributesClassName = null;
}


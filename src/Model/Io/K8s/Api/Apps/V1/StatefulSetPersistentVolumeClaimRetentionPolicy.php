<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * StatefulSetPersistentVolumeClaimRetentionPolicy describes the policy used for
 * PVCs created from the StatefulSet VolumeClaimTemplates.
 */
class StatefulSetPersistentVolumeClaimRetentionPolicy extends AbstractModel
{

    /**
     * WhenDeleted specifies what happens to PVCs created from StatefulSet
     * VolumeClaimTemplates when the StatefulSet is deleted. The default policy of
     * `Retain` causes PVCs to not be affected by StatefulSet deletion. The `Delete`
     * policy causes those PVCs to be deleted.
     *
     * @var string
     */
    public $whenDeleted = null;

    /**
     * WhenScaled specifies what happens to PVCs created from StatefulSet
     * VolumeClaimTemplates when the StatefulSet is scaled down. The default policy of
     * `Retain` causes PVCs to not be affected by a scaledown. The `Delete` policy
     * causes the associated PVCs for any excess pods above the replica count to be
     * deleted.
     *
     * @var string
     */
    public $whenScaled = null;


}


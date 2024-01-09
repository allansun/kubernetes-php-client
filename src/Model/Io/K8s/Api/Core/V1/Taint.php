<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * The node this Taint is attached to has the "effect" on any pod that does not
 * tolerate the Taint.
 */
class Taint extends AbstractModel
{
    /**
     * Required. The effect of the taint on pods that do not tolerate the taint. Valid
     * effects are NoSchedule, PreferNoSchedule and NoExecute.
     *
     *
     *
     * @var string
     */
    public $effect = null;

    /**
     * Required. The taint key to be applied to a node.
     *
     * @var string
     */
    public $key = null;

    /**
     * TimeAdded represents the time at which the taint was added. It is only written
     * for NoExecute taints.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $timeAdded = null;

    /**
     * The taint value corresponding to the taint key.
     *
     * @var string
     */
    public $value = null;
}


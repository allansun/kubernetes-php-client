<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * PodSchedulingSpec describes where resources for the Pod are needed.
 */
class PodSchedulingSpec extends AbstractModel
{
    /**
     * PotentialNodes lists nodes where the Pod might be able to run.
     *
     * The size of this field is limited to 128. This is large enough for many
     * clusters. Larger clusters may need more attempts to find a node that suits all
     * pending resources. This may get increased in the future, but not reduced.
     *
     * @var string[]
     */
    public $potentialNodes = null;

    /**
     * SelectedNode is the node for which allocation of ResourceClaims that are
     * referenced by the Pod and that use "WaitForFirstConsumer" allocation is to be
     * attempted.
     *
     * @var string
     */
    public $selectedNode = null;
}


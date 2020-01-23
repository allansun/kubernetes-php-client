<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1;

/**
 * FlowSchemaStatus represents the current state of a FlowSchema.
 */
class FlowSchemaStatus extends \KubernetesRuntime\AbstractModel
{

    /**
     * `conditions` is a list of the current states of FlowSchema.
     *
     * @var FlowSchemaCondition[]
     */
    public $conditions = null;


}


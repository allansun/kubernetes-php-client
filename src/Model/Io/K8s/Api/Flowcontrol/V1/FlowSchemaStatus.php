<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * FlowSchemaStatus represents the current state of a FlowSchema.
 */
class FlowSchemaStatus extends AbstractModel
{
    /**
     * `conditions` is a list of the current states of FlowSchema.
     *
     * @var FlowSchemaCondition[]
     */
    public $conditions = null;
}


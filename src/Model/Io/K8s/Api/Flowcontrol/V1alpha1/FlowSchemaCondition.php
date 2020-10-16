<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * FlowSchemaCondition describes conditions for a FlowSchema.
 */
class FlowSchemaCondition extends AbstractModel
{

    /**
     * `lastTransitionTime` is the last time the condition transitioned from one status
     * to another.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastTransitionTime = null;

    /**
     * `message` is a human-readable message indicating details about last transition.
     *
     * @var string
     */
    public $message = null;

    /**
     * `reason` is a unique, one-word, CamelCase reason for the condition's last
     * transition.
     *
     * @var string
     */
    public $reason = null;

    /**
     * `status` is the status of the condition. Can be True, False, Unknown. Required.
     *
     * @var string
     */
    public $status = null;

    /**
     * `type` is the type of the condition. Required.
     *
     * @var string
     */
    public $type = null;


}


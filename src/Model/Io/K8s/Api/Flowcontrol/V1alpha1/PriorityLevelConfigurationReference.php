<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1;

/**
 * PriorityLevelConfigurationReference contains information that points to the
 * "request-priority" being used.
 */
class PriorityLevelConfigurationReference extends \KubernetesRuntime\AbstractModel
{

    /**
     * `name` is the name of the priority level configuration being referenced
     * Required.
     *
     * @var string
     */
    public $name = null;


}


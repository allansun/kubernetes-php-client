<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * PriorityLevelConfigurationReference contains information that points to the
 * "request-priority" being used.
 */
class PriorityLevelConfigurationReference extends AbstractModel
{

    /**
     * `name` is the name of the priority level configuration being referenced
     * Required.
     *
     * @var string
     */
    public $name = null;


}


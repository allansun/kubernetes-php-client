<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * SleepAction describes a "sleep" action.
 */
class SleepAction extends AbstractModel
{
    /**
     * Seconds is the number of seconds to sleep.
     *
     * @var integer
     */
    public $seconds = null;
}


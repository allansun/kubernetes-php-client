<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * DaemonSetUpdateStrategy is a struct used to control the update strategy for a
 * DaemonSet.
 */
class DaemonSetUpdateStrategy extends AbstractModel
{
    /**
     * Rolling update config params. Present only if type = "RollingUpdate".
     *
     * @var RollingUpdateDaemonSet
     */
    public $rollingUpdate = null;

    /**
     * Type of daemon set update. Can be "RollingUpdate" or "OnDelete". Default is
     * RollingUpdate.
     *
     *
     *
     * @var string
     */
    public $type = null;
}


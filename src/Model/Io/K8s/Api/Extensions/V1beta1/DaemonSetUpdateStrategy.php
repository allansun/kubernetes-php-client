<?php

namespace Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1;

class DaemonSetUpdateStrategy extends \Kubernetes\AbstractModel
{

    /**
     * Rolling update config params. Present only if type = "RollingUpdate".
     *
     * @var RollingUpdateDaemonSet
     */
    public $rollingUpdate = null;

    /**
     * Type of daemon set update. Can be "RollingUpdate" or "OnDelete". Default is
     * OnDelete.
     *
     * @var string
     */
    public $type = null;


}


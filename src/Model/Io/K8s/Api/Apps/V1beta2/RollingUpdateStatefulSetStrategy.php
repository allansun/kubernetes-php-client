<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1beta2;

use \KubernetesRuntime\AbstractModel;

/**
 * RollingUpdateStatefulSetStrategy is used to communicate parameter for
 * RollingUpdateStatefulSetStrategyType.
 */
class RollingUpdateStatefulSetStrategy extends AbstractModel
{

    /**
     * Partition indicates the ordinal at which the StatefulSet should be partitioned.
     * Default value is 0.
     *
     * @var integer
     */
    public $partition = null;


}


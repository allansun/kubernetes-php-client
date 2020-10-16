<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * DEPRECATED.
 */
class RollbackConfig extends AbstractModel
{

    /**
     * The revision to rollback to. If set to 0, rollback to the last revision.
     *
     * @var integer
     */
    public $revision = null;


}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * NamespaceCondition contains details about state of namespace.
 */
class NamespaceCondition extends AbstractModel
{
    /**
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastTransitionTime = null;

    /**
     * @var string
     */
    public $message = null;

    /**
     * @var string
     */
    public $reason = null;

    /**
     * Status of the condition, one of True, False, Unknown.
     *
     * @var string
     */
    public $status = null;

    /**
     * Type of namespace controller condition.
     *
     * @var string
     */
    public $type = null;
}


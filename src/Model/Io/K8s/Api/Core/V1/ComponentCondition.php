<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Information about the condition of a component.
 */
class ComponentCondition extends \Kubernetes\AbstractModel
{

    /**
     * Condition error code for a component. For example, a health check error code.
     *
     * @var string
     */
    public $error = null;

    /**
     * Message about the condition for a component. For example, information about a
     * health check.
     *
     * @var string
     */
    public $message = null;

    /**
     * Status of the condition for a component. Valid values for "Healthy": "True",
     * "False", or "Unknown".
     *
     * @var string
     */
    public $status = null;

    /**
     * Type of condition for a component. Valid value: "Healthy"
     *
     * @var string
     */
    public $type = null;


}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * TypeChecking contains results of type checking the expressions in the
 * ValidatingAdmissionPolicy
 */
class TypeChecking extends AbstractModel
{
    /**
     * The type checking warnings for each expression.
     *
     * @var ExpressionWarning[]
     */
    public $expressionWarnings = null;
}


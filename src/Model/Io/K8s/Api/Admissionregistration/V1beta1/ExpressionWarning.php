<?php

namespace Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * ExpressionWarning is a warning information that targets a specific expression.
 */
class ExpressionWarning extends AbstractModel
{
    /**
     * The path to the field that refers the expression. For example, the reference to
     * the expression of the first item of validations is
     * "spec.validations[0].expression"
     *
     * @var string
     */
    public $fieldRef = null;

    /**
     * The content of type checking information in a human-readable form. Each line of
     * the warning contains the type that the expression is checked against, followed
     * by the type check error from the compiler.
     *
     * @var string
     */
    public $warning = null;
}


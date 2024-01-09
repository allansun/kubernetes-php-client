<?php

namespace Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * ValidatingAdmissionPolicyStatus represents the status of a
 * ValidatingAdmissionPolicy.
 */
class ValidatingAdmissionPolicyStatus extends AbstractModel
{
    /**
     * The conditions represent the latest available observations of a policy's current
     * state.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Condition[]
     */
    public $conditions = null;

    /**
     * The generation observed by the controller.
     *
     * @var integer
     */
    public $observedGeneration = null;

    /**
     * The results of type checking for each expression. Presence of this field
     * indicates the completion of the type checking.
     *
     * @var TypeChecking
     */
    public $typeChecking = null;
}


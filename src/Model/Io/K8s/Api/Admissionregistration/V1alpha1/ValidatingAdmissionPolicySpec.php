<?php

namespace Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * ValidatingAdmissionPolicySpec is the specification of the desired behavior of
 * the AdmissionPolicy.
 */
class ValidatingAdmissionPolicySpec extends AbstractModel
{
    /**
     * FailurePolicy defines how to handle failures for the admission policy. Failures
     * can occur from invalid or mis-configured policy definitions or bindings. A
     * policy is invalid if spec.paramKind refers to a non-existent Kind. A binding is
     * invalid if spec.paramRef.name refers to a non-existent resource. Allowed values
     * are Ignore or Fail. Defaults to Fail.
     *
     * @var string
     */
    public $failurePolicy = null;

    /**
     * MatchConstraints specifies what resources this policy is designed to validate.
     * The AdmissionPolicy cares about a request if it matches _all_ Constraints.
     * However, in order to prevent clusters from being put into an unstable state that
     * cannot be recovered from via the API ValidatingAdmissionPolicy cannot match
     * ValidatingAdmissionPolicy and ValidatingAdmissionPolicyBinding. Required.
     *
     * @var MatchResources
     */
    public $matchConstraints = null;

    /**
     * ParamKind specifies the kind of resources used to parameterize this policy. If
     * absent, there are no parameters for this policy and the param CEL variable will
     * not be provided to validation expressions. If ParamKind refers to a non-existent
     * kind, this policy definition is mis-configured and the FailurePolicy is applied.
     * If paramKind is specified but paramRef is unset in
     * ValidatingAdmissionPolicyBinding, the params variable will be null.
     *
     * @var ParamKind
     */
    public $paramKind = null;

    /**
     * Validations contain CEL expressions which is used to apply the validation. A
     * minimum of one validation is required for a policy definition. Required.
     *
     * @var Validation[]
     */
    public $validations = null;
}


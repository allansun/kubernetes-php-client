<?php

namespace Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * ValidatingAdmissionPolicyBindingSpec is the specification of the
 * ValidatingAdmissionPolicyBinding.
 */
class ValidatingAdmissionPolicyBindingSpec extends AbstractModel
{
    /**
     * MatchResources declares what resources match this binding and will be validated
     * by it. Note that this is intersected with the policy's matchConstraints, so only
     * requests that are matched by the policy can be selected by this. If this is
     * unset, all resources matched by the policy are validated by this binding When
     * resourceRules is unset, it does not constrain resource matching. If a resource
     * is matched by the other fields of this object, it will be validated. Note that
     * this is differs from ValidatingAdmissionPolicy matchConstraints, where
     * resourceRules are required.
     *
     * @var MatchResources
     */
    public $matchResources = null;

    /**
     * ParamRef specifies the parameter resource used to configure the admission
     * control policy. It should point to a resource of the type specified in ParamKind
     * of the bound ValidatingAdmissionPolicy. If the policy specifies a ParamKind and
     * the resource referred to by ParamRef does not exist, this binding is considered
     * mis-configured and the FailurePolicy of the ValidatingAdmissionPolicy applied.
     *
     * @var ParamRef
     */
    public $paramRef = null;

    /**
     * PolicyName references a ValidatingAdmissionPolicy name which the
     * ValidatingAdmissionPolicyBinding binds to. If the referenced resource does not
     * exist, this binding is considered invalid and will be ignored Required.
     *
     * @var string
     */
    public $policyName = null;
}


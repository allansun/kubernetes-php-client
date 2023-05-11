<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1beta2;

use \KubernetesRuntime\AbstractModel;

/**
 * PolicyRulesWithSubjects prescribes a test that applies to a request to an
 * apiserver. The test considers the subject making the request, the verb being
 * requested, and the resource to be acted upon. This PolicyRulesWithSubjects
 * matches a request if and only if both (a) at least one member of subjects
 * matches the request and (b) at least one member of resourceRules or
 * nonResourceRules matches the request.
 */
class PolicyRulesWithSubjects extends AbstractModel
{

    /**
     * `nonResourceRules` is a list of NonResourcePolicyRules that identify matching
     * requests according to their verb and the target non-resource URL.
     *
     * @var NonResourcePolicyRule[]
     */
    public $nonResourceRules = null;

    /**
     * `resourceRules` is a slice of ResourcePolicyRules that identify matching
     * requests according to their verb and the target resource. At least one of
     * `resourceRules` and `nonResourceRules` has to be non-empty.
     *
     * @var ResourcePolicyRule[]
     */
    public $resourceRules = null;

    /**
     * subjects is the list of normal user, serviceaccount, or group that this rule
     * cares about. There must be at least one member in this slice. A slice that
     * includes both the system:authenticated and system:unauthenticated user groups
     * matches every request. Required.
     *
     * @var Subject[]
     */
    public $subjects = null;


}


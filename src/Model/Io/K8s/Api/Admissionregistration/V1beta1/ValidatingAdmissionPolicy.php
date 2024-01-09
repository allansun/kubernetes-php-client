<?php

namespace Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * ValidatingAdmissionPolicy describes the definition of an admission validation
 * policy that accepts or rejects an object without changing it.
 */
class ValidatingAdmissionPolicy extends AbstractModel
{
    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'admissionregistration.k8s.io/v1beta1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'ValidatingAdmissionPolicy';

    /**
     * Standard object metadata; More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Specification of the desired behavior of the ValidatingAdmissionPolicy.
     *
     * @var ValidatingAdmissionPolicySpec
     */
    public $spec = null;

    /**
     * The status of the ValidatingAdmissionPolicy, including warnings that are useful
     * to determine if the policy behaves in the expected way. Populated by the system.
     * Read-only.
     *
     * @var ValidatingAdmissionPolicyStatus
     */
    public $status = null;
}


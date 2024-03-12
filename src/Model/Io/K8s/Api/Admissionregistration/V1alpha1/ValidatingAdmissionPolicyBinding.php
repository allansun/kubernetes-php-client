<?php

namespace Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * ValidatingAdmissionPolicyBinding binds the ValidatingAdmissionPolicy with
 * paramerized resources. ValidatingAdmissionPolicyBinding and parameter CRDs
 * together define how cluster administrators configure policies for clusters.
 */
class ValidatingAdmissionPolicyBinding extends AbstractModel
{
    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'admissionregistration.k8s.io/v1alpha1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'ValidatingAdmissionPolicyBinding';

    /**
     * Standard object metadata; More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Specification of the desired behavior of the ValidatingAdmissionPolicyBinding.
     *
     * @var ValidatingAdmissionPolicyBindingSpec
     */
    public $spec = null;
}


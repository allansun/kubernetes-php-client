<?php

namespace Kubernetes\Model\Io\K8s\Api\Authentication\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * SelfSubjectReview contains the user information that the kube-apiserver has
 * about the user making this request. When using impersonation, users will receive
 * the user info of the user being impersonated.
 */
class SelfSubjectReview extends AbstractModel
{
    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'authentication.k8s.io/v1alpha1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'SelfSubjectReview';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Status is filled in by the server with the user attributes.
     *
     * @var SelfSubjectReviewStatus
     */
    public $status = null;
}


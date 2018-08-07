<?php

namespace Kubernetes\Model\Io\K8s\Api\Authorization\V1;

/**
 * SubjectAccessReview checks whether or not a user or group can perform an action.
 */
class SubjectAccessReview extends \Kubernetes\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'authorization.k8s.io/v1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'SubjectAccessReview';

    /**
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Spec holds information about the request being evaluated
     *
     * @var SubjectAccessReviewSpec
     */
    public $spec = null;

    /**
     * Status is filled in by the server and indicates whether the request is allowed
     * or not
     *
     * @var SubjectAccessReviewStatus
     */
    public $status = null;


}


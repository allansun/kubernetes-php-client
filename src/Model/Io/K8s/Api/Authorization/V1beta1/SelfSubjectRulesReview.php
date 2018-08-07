<?php

namespace Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1;

/**
 * SelfSubjectRulesReview enumerates the set of actions the current user can
 * perform within a namespace. The returned list of actions may be incomplete
 * depending on the server's authorization mode, and any errors experienced during
 * the evaluation. SelfSubjectRulesReview should be used by UIs to show/hide
 * actions, or to quickly let an end user reason about their permissions. It should
 * NOT Be used by external systems to drive authorization decisions as this raises
 * confused deputy, cache lifetime/revocation, and correctness concerns.
 * SubjectAccessReview, and LocalAccessReview are the correct way to defer
 * authorization decisions to the API server.
 */
class SelfSubjectRulesReview extends \Kubernetes\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'authorization.k8s.io/v1beta1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'SelfSubjectRulesReview';

    /**
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Spec holds information about the request being evaluated.
     *
     * @var SelfSubjectRulesReviewSpec
     */
    public $spec = null;

    /**
     * Status is filled in by the server and indicates the set of actions a user can
     * perform.
     *
     * @var SubjectRulesReviewStatus
     */
    public $status = null;


}


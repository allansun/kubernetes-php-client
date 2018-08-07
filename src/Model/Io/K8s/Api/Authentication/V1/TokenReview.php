<?php

namespace Kubernetes\Model\Io\K8s\Api\Authentication\V1;

/**
 * TokenReview attempts to authenticate a token to a known user. Note: TokenReview
 * requests may be cached by the webhook token authenticator plugin in the
 * kube-apiserver.
 */
class TokenReview extends \Kubernetes\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'authentication.k8s.io/v1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'TokenReview';

    /**
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Spec holds information about the request being evaluated
     *
     * @var TokenReviewSpec
     */
    public $spec = null;

    /**
     * Status is filled in by the server and indicates whether the request can be
     * authenticated.
     *
     * @var TokenReviewStatus
     */
    public $status = null;


}


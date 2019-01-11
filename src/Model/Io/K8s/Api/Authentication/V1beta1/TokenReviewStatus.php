<?php

namespace Kubernetes\Model\Io\K8s\Api\Authentication\V1beta1;

/**
 * TokenReviewStatus is the result of the token authentication request.
 */
class TokenReviewStatus extends \Kubernetes\AbstractModel
{

    /**
     * Audiences are audience identifiers chosen by the authenticator that are
     * compatible with both the TokenReview and token. An identifier is any identifier
     * in the intersection of the TokenReviewSpec audiences and the token's audiences.
     * A client of the TokenReview API that sets the spec.audiences field should
     * validate that a compatible audience identifier is returned in the
     * status.audiences field to ensure that the TokenReview server is audience aware.
     * If a TokenReview returns an empty status.audience field where
     * status.authenticated is "true", the token is valid against the audience of the
     * Kubernetes API server.
     *
     * @var string[]
     */
    public $audiences = null;

    /**
     * Authenticated indicates that the token was associated with a known user.
     *
     * @var boolean
     */
    public $authenticated = null;

    /**
     * Error indicates that the token couldn't be checked
     *
     * @var string
     */
    public $error = null;

    /**
     * User is the UserInfo associated with the provided token.
     *
     * @var UserInfo
     */
    public $user = null;


}


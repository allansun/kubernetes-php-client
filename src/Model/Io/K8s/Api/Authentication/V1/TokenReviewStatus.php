<?php

namespace Kubernetes\Model\Io\K8s\Api\Authentication\V1;

/**
 * TokenReviewStatus is the result of the token authentication request.
 */
class TokenReviewStatus extends \Kubernetes\AbstractModel
{

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


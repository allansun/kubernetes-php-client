<?php

namespace Kubernetes\Model\Io\K8s\Api\Authentication\V1beta1;

/**
 * TokenReviewSpec is a description of the token authentication request.
 */
class TokenReviewSpec extends \Kubernetes\AbstractModel
{

    /**
     * Audiences is a list of the identifiers that the resource server presented with
     * the token identifies as. Audience-aware token authenticators will verify that
     * the token was intended for at least one of the audiences in this list. If no
     * audiences are provided, the audience will default to the audience of the
     * Kubernetes apiserver.
     *
     * @var string[]
     */
    public $audiences = null;

    /**
     * Token is the opaque bearer token.
     *
     * @var string
     */
    public $token = null;


}


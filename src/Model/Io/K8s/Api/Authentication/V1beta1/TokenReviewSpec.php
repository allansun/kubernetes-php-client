<?php

namespace Kubernetes\Model\Io\K8s\Api\Authentication\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * TokenReviewSpec is a description of the token authentication request.
 */
class TokenReviewSpec extends AbstractModel
{

    /**
     * Token is the opaque bearer token.
     *
     * @var string
     */
    public $token = null;


}


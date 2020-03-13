<?php

namespace Kubernetes\Model\Io\K8s\Api\Authentication\V1;

/**
 * TokenRequestStatus is the result of a token request.
 */
class TokenRequestStatus extends \KubernetesRuntime\AbstractModel
{

    /**
     * ExpirationTimestamp is the time of expiration of the returned token.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $expirationTimestamp = null;

    /**
     * Token is the opaque bearer token.
     *
     * @var string
     */
    public $token = null;


}


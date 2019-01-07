<?php

namespace Kubernetes\Model\Io\K8s\Api\Authorization\V1;

/**
 * SelfSubjectAccessReviewSpec is a description of the access request.  Exactly one
 * of ResourceAuthorizationAttributes and NonResourceAuthorizationAttributes must
 * be set
 */
class SelfSubjectAccessReviewSpec extends \Kubernetes\AbstractModel
{

    /**
     * NonResourceAttributes describes information for a non-resource access request
     *
     * @var NonResourceAttributes
     */
    public $nonResourceAttributes = null;

    /**
     * ResourceAuthorizationAttributes describes information for a resource access
     * request
     *
     * @var ResourceAttributes
     */
    public $resourceAttributes = null;


}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1;

/**
 * SubjectAccessReviewSpec is a description of the access request.  Exactly one of
 * ResourceAuthorizationAttributes and NonResourceAuthorizationAttributes must be
 * set
 */
class SubjectAccessReviewSpec extends \Kubernetes\AbstractModel
{

    /**
     * Extra corresponds to the user.Info.GetExtra() method from the authenticator. 
     * Since that is input to the authorizer it needs a reflection here.
     *
     * @var object
     */
    public $extra = null;

    /**
     * Groups is the groups you're testing for.
     *
     * @var string[]
     */
    public $group = null;

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

    /**
     * UID information about the requesting user.
     *
     * @var string
     */
    public $uid = null;

    /**
     * User is the user you're testing for. If you specify "User" but not "Group", then
     * is it interpreted as "What if User were not a member of any groups
     *
     * @var string
     */
    public $user = null;


}


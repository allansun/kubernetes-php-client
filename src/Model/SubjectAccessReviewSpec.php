<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Model;


class SubjectAccessReviewSpec extends AbstractModel
{
    /**
     * @var \StdClass
     * Extra corresponds to the user.Info.GetExtra() method from the authenticator. Since that is input to the
     * authorizer it needs a reflection here.
     */
    public $extra;

    /**
     * @var string[]
     * Groups is the groups you're testing for.
     */
    public $groups;

    /**
     * @var NonResourceAttributes
     * NonResourceAttributes describes information for a non-resource access request
     */
    public $nonResourceAttributes;

    /**
     * @var ResourceAttributes
     * ResourceAuthorizationAttributes describes information for a resource access request
     */
    public $resourceAttributes;

    /**
     * @var string
     * User is the user you're testing for. If you specify "User" but not "Groups", then is it interpreted as "What if
     * User were not a member of any groups
     */
    public $user;

    /**
     * @param NonResourceAttributes $nonResourceAttributes
     *
     * @return self
     */
    public function setNonResourceAttributes($nonResourceAttributes)
    {
        $this->nonResourceAttributes =
            $this->_createPropertyValue($nonResourceAttributes, NonResourceAttributes::class, false);

        return $this;
    }

    /**
     * @param ResourceAttributes $resourceAttributes
     *
     * @return self
     */
    public function setResourceAttributes($resourceAttributes)
    {
        $this->resourceAttributes = $this->_createPropertyValue($resourceAttributes, ResourceAttributes::class, false);

        return $this;
    }

}
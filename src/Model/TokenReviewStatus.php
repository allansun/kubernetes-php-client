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


class TokenReviewStatus extends AbstractModel
{
    /**
     * @var boolean
     * Authenticated indicates that the token was associated with a known user.
     */
    public $authenticated;

    /**
     * @var string
     * Error indicates that the token couldn't be checked
     */
    public $error;

    /**
     * @var UserInfo
     * User is the UserInfo associated with the provided token.
     */
    public $user;

    /**
     * @param UserInfo $user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->user = $this->_createPropertyValue($user, UserInfo::class, false);

        return $this;
    }

}
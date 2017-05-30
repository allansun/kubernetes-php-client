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


class UserInfo extends AbstractModel
{
    /**
     * @var \StdClass
     * Any additional information provided by the authenticator.
     */
    public $extra;

    /**
     * @var string[]
     * The names of groups this user is a part of.
     */
    public $groups;

    /**
     * @var string
     * A unique value that identifies this user across time. If this user is deleted and another user by the same name
     * is added, they will have different UIDs.
     */
    public $uid;

    /**
     * @var string
     * The name that uniquely identifies this user among all active users.
     */
    public $username;

}
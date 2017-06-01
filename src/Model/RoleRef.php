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


class RoleRef extends AbstractModel
{
    /**
     * @var string
     * APIGroup is the group for the resource being referenced
     */
    public $apiGroup;

    /**
     * @var string
     * Kind is the type of resource being referenced
     */
    public $kind;

    /**
     * @var string
     * Name is the name of resource being referenced
     */
    public $name;

}
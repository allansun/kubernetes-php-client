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


/**
 * Adds and removes POSIX capabilities from running containers.
 *
 * @package Kubernetes\Model
 */
class Capabilities extends AbstractModel
{
    /**
     * @var string[]
     * Added capabilities
     */
    public $add;

    /**
     * @var string[]
     * Removed capabilities
     */
    public $drop;
}
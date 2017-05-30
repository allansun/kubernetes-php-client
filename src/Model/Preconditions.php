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
 * Preconditions must be fulfilled before an operation (update, delete, etc.) is carried out.
 *
 * @package Kubernetes\Model
 */
class Preconditions extends AbstractModel
{
    /**
     * @var string
     * Specifies the target UID.
     */
    public $uid;
}
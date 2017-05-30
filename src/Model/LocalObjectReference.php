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
 * LocalObjectReference contains enough information to let you locate the referenced object inside the same namespace.
 *
 * @package Kubernetes\Model
 */
class LocalObjectReference extends AbstractModel
{

    /**
     * @var string
     * Name of the referent. More info: http://kubernetes.io/docs/user-guide/identifiers#names
     */
    public $name;
}
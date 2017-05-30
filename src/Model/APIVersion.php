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
 * Class APIVersion
 *
 * @package Kubernetes\Model
 *
 * An APIVersion represents a single concrete version of an object model.
 */
class APIVersion extends AbstractModel
{

    /**
     * @var string
     *
     * Name of this version (e.g. 'v1').
     */
    public $name;
}
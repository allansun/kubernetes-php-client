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


class ScaleSpec extends AbstractModel
{
    /**
     * @var integer
     * desired number of instances for the scaled object.
     */
    public $replicas;
}
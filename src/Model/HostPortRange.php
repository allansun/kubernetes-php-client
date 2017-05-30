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
 * Host Port Range defines a range of host ports that will be enabled by a policy for pods to use. It requires both the
 * start and end to be defined.
 *
 * @package Kubernetes\Model
 */
class HostPortRange extends AbstractModel
{
    /**
     * @var integer
     * Max is the end of the range, inclusive.
     */
    public $max;

    /**
     * @var integer
     * Min is the start of the range, inclusive.
     */
    public $min;

}
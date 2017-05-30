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


class IDRange extends AbstractModel
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
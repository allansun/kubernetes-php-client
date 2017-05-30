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


class LimitRangeSpec extends AbstractModel
{
    /**
     * @var LimitRangeItem[]
     * Limits is the list of LimitRangeItem objects that are enforced.
     */
    public $limits;

    /**
     * @param LimitRangeItem[] $limits
     *
     * @return self
     */
    public function setLimits($limits)
    {
        $this->limits = $this->_createPropertyValue($limits, LimitRangeItem::class, true);

        return $this;
    }


}
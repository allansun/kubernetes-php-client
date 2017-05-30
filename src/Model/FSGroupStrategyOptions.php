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


class FSGroupStrategyOptions extends AbstractModel
{

    /**
     * @var IDRange[]
     */
    public $ranges;

    /**
     * @var string
     */
    public $rule;

    /**
     * @param IDRange[] $ranges
     *
     * @return self
     */
    public function setRanges($ranges)
    {
        $this->ranges = $this->_createPropertyValue($ranges, IDRange::class, true);

        return $this;
    }

}
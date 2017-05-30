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


class PodDisruptionBudgetSpec extends AbstractModel
{
    /**
     * @var string
     */
    public $minAvailable;

    /**
     * @var LabelSelector
     */
    public $selector;

    /**
     * @param LabelSelector $selector
     *
     * @return self
     */
    public function setSelector($selector)
    {
        $this->selector = $this->_createPropertyValue($selector, LabelSelector::class, false);

        return $this;
    }

}
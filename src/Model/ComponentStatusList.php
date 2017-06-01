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


class ComponentStatusList extends AbstractModelList
{
    /**
     * @var ComponentStatus[]
     */
    public $items;

    /**
     * @param ComponentStatus[] $items
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->items = $this->_createPropertyValue($items, ComponentStatus::class, true);

        return $this;
    }

}
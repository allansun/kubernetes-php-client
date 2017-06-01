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


class PersistentVolumeClaimList extends AbstractModelList
{
    /**
     * @var PersistentVolumeClaim[]
     */
    public $items;

    /**
     * @param PersistentVolumeClaim[] $items
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->items = $this->_createPropertyValue($items, PersistentVolumeClaim::class, true);

        return $this;
    }

}
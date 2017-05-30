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
 * Represents downward API info for projecting into a projected volume.
 * Note that this is identical to a downwardAPI volume source without the default mode.
 *
 * @package Kubernetes\Model
 */
class DownwardAPIProjection extends AbstractModel
{
    /**
     * @var DownwardAPIVolumeFile[]
     * Items is a list of DownwardAPIVolume file
     */
    public $items;

    /**
     * @param DownwardAPIVolumeFile[] $items
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->items = $this->_createPropertyValue($items, DownwardAPIVolumeFile::class, true);

        return $this;
    }

}
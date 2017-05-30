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
 * DownwardAPIVolumeSource represents a volume containing downward API info.
 * Downward API volumes support ownership management and SELinux relabeling.
 *
 * @package Kubernetes\Model
 */
class DownwardAPIVolumeSource extends AbstractModel
{
    /**
     * @var integer
     * Optional: mode bits to use on created files by default.
     * Must be a value between 0 and 0777. Defaults to 0644.
     * Directories within the path are not affected by this setting.
     * This might be in conflict with other options that affect the file mode, like fsGroup,
     * and the result can be other mode bits set.
     */
    public $defaultMode = '0644';

    /**
     * @var DownwardAPIVolumeFile[]
     * Items is a list of downward API volume file
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
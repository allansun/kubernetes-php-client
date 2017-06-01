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
 * Represents a projected volume source
 *
 * @package Kubernetes\Model
 */
class ProjectedVolumeSource extends AbstractModel
{

    /**
     * @var integer
     * Mode bits to use on created files by default. Must be a value between 0 and 0777.
     * Directories within the path are not affected by this setting.
     * This might be in conflict with other options that affect the file mode, like fsGroup, and
     * the result can be other mode bits set.
     */
    public $defaultMode;

    /**
     * @var VolumeProjection[]
     * list of volume projections
     */
    public $sources;

    /**
     * @param VolumeProjection[] $sources
     *
     * @return self
     */
    public function setSources($sources)
    {
        $this->sources = $this->_createPropertyValue($sources, VolumeProjection::class, true);

        return $this;
    }

}
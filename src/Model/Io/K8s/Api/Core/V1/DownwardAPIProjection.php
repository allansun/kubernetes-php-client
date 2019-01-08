<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Represents downward API info for projecting into a projected volume. Note that
 * this is identical to a downwardAPI volume source without the default mode.
 */
class DownwardAPIProjection extends \Kubernetes\AbstractModel
{

    /**
     * Items is a list of DownwardAPIVolume file
     *
     * @var DownwardAPIVolumeFile[]
     */
    public $items = null;


}


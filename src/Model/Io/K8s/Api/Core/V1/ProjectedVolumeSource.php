<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Represents a projected volume source
 */
class ProjectedVolumeSource extends \Kubernetes\AbstractModel
{

    /**
     * Mode bits to use on created files by default. Must be a value between 0 and
     * 0777. Directories within the path are not affected by this setting. This might
     * be in conflict with other options that affect the file mode, like fsGroup, and
     * the result can be other mode bits set.
     *
     * @var integer
     */
    public $defaultMode = null;

    /**
     * list of volume projections
     *
     * @var VolumeProjection[]
     */
    public $sources = null;


}


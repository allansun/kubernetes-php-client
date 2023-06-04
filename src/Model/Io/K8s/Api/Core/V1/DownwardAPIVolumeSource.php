<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * DownwardAPIVolumeSource represents a volume containing downward API info.
 * Downward API volumes support ownership management and SELinux relabeling.
 */
class DownwardAPIVolumeSource extends AbstractModel
{

    /**
     * Optional: mode bits to use on created files by default. Must be a Optional: mode
     * bits used to set permissions on created files by default. Must be an octal value
     * between 0000 and 0777 or a decimal value between 0 and 511. YAML accepts both
     * octal and decimal values, JSON requires decimal values for mode bits. Defaults
     * to 0644. Directories within the path are not affected by this setting. This
     * might be in conflict with other options that affect the file mode, like fsGroup,
     * and the result can be other mode bits set.
     *
     * @var integer
     */
    public $defaultMode = null;

    /**
     * Items is a list of downward API volume file
     *
     * @var DownwardAPIVolumeFile[]
     */
    public $items = null;


}


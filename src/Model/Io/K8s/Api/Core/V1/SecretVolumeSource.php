<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Adapts a Secret into a volume.
 *
 * The contents of the target Secret's Data field will be presented in a volume as
 * files using the keys in the Data field as the file names. Secret volumes support
 * ownership management and SELinux relabeling.
 */
class SecretVolumeSource extends \KubernetesRuntime\AbstractModel
{

    /**
     * Optional: mode bits to use on created files by default. Must be a value between
     * 0 and 0777. Defaults to 0644. Directories within the path are not affected by
     * this setting. This might be in conflict with other options that affect the file
     * mode, like fsGroup, and the result can be other mode bits set.
     *
     * @var integer
     */
    public $defaultMode = null;

    /**
     * If unspecified, each key-value pair in the Data field of the referenced Secret
     * will be projected into the volume as a file whose name is the key and content is
     * the value. If specified, the listed keys will be projected into the specified
     * paths, and unlisted keys will not be present. If a key is specified which is not
     * present in the Secret, the volume setup will error unless it is marked optional.
     * Paths must be relative and may not contain the '..' path or start with '..'.
     *
     * @var KeyToPath[]
     */
    public $items = null;

    /**
     * Specify whether the Secret or it's keys must be defined
     *
     * @var boolean
     */
    public $optional = null;

    /**
     * Name of the secret in the pod's namespace to use. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#secret
     *
     * @var string
     */
    public $secretName = null;


}


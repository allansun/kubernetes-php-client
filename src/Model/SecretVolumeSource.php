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
 * Adapts a Secret into a volume.
 * The contents of the target Secret's Data field will be presented in a volume as files using the keys
 * in the Data field as the file names.
 * Secret volumes support ownership management and SELinux relabeling.
 *
 * @package Kubernetes\Model
 */
class SecretVolumeSource extends AbstractModel
{
    /**
     * @var integer
     * Optional: mode bits to use on created files by default. Must be a value between 0 and 0777.
     * Defaults to 0644. Directories within the path are not affected by this setting.
     * This might be in conflict with other options that affect the file mode, like fsGroup,
     * and the result can be other mode bits set.
     */
    public $defaultMode = '0644';

    /**
     * @var KeyToPath[]
     * If unspecified, each key-value pair in the Data field of the referenced Secret will be projected into
     * the volume as a file whose name is the key and content is the value. If specified, the listed keys will
     * be projected into the specified paths, and unlisted keys will not be present. If a key is specified which
     * is not present in the Secret, the volume setup will error unless it is marked optional.
     * Paths must be relative and may not contain the '..' path or start with '..'.
     */
    public $items;

    /**
     * @var boolean
     * Specify whether the Secret or it's keys must be defined
     */
    public $optional;

    /**
     * @var string
     * Name of the secret in the pod's namespace to use. More info: http://kubernetes.io/docs/user-guide/volumes#secrets
     */
    public $secretName;

    /**
     * @param KeyToPath[] $items
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->items = $this->_createPropertyValue($items, KeyToPath::class, true);

        return $this;
    }

}
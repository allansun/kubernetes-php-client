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
 * Adapts a ConfigMap into a projected volume.
 * The contents of the target ConfigMap's Data field will be presented in a projected volume as files using the keys
 * in the Data field as the file names, unless the items element is populated with specific mappings of keys to paths.
 * Note that this is identical to a configmap volume source without the default mode.
 *
 * @package Kubernetes\Model
 */
class ConfigMapProjection extends AbstractModel
{
    /**
     * @var KeyToPath[]
     * If unspecified, each key-value pair in the Data field of the referenced ConfigMap will be projected into the
     * volume as a file whose name is the key and content is the value.
     * If specified, the listed keys will be projected into the specified paths, and unlisted keys will not be present.
     * If a key is specified which is not present in the ConfigMap, the volume setup will error unless
     * it is marked optional.
     * Paths must be relative and may not contain the '..' path or start with '..'.
     */
    public $items;

    /**
     * @var string
     * Name of the referent. More info: http://kubernetes.io/docs/user-guide/identifiers#names
     */
    public $name;

    /**
     * @var boolean
     * Specify whether the ConfigMap or it's keys must be defined
     */
    public $optional;

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
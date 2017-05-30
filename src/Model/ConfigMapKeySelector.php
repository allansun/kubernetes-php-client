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
 * Selects a key from a ConfigMap.
 *
 * @package Kubernetes\Model
 */
class ConfigMapKeySelector extends AbstractModel
{
    /**
     * @var string
     * The key to select.
     */
    public $key;

    /**
     * @var string
     * Name of the referent. More info: http://kubernetes.io/docs/user-guide/identifiers#names
     */
    public $name;

    /**
     * @var boolean
     * Specify whether the ConfigMap must be defined
     */
    public $optional;
}
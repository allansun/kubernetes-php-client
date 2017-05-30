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
 * SecretKeySelector selects a key of a Secret.
 *
 * @package Kubernetes\Model
 */
class SecretKeySelector extends AbstractModel
{
    /**
     * @var string
     * The key of the secret to select from. Must be a valid secret key.
     */
    public $key;

    /**
     * @var string
     * Name of the referent. More info: http://kubernetes.io/docs/user-guide/identifiers#names
     */
    public $name;

    /**
     * @var boolean
     * Specify whether the Secret or it's key must be defined
     */
    public $optional;
}
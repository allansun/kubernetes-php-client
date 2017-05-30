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
 * SecretEnvSource selects a Secret to populate the environment variables with.
 * The contents of the target Secret's Data field will represent the key-value pairs as environment variables.
 *
 * @package Kubernetes\Model
 */
class SecretEnvSource extends AbstractModel
{

    /**
     * @var string
     * Name of the referent. More info: http://kubernetes.io/docs/user-guide/identifiers#names
     */
    public $name;

    /**
     * @var boolean
     * Specify whether the Secret must be defined
     */
    public $optional;
}
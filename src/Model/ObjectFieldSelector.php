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
 * ObjectFieldSelector selects an APIVersioned field of an object.
 *
 * @package Kubernetes\Model
 */
class ObjectFieldSelector extends AbstractModel
{

    /**
     * @var string
     * Version of the schema the FieldPath is written in terms of, defaults to "v1".
     */
    public $apiVersion;

    /**
     * @var string
     * Path of the field to select in the specified API version.
     */
    public $fieldPath;
}
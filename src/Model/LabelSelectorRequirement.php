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
 * A label selector requirement is a selector that contains values, a key, and an operator that relates the key and values.
 *
 * @package Kubernetes\Model
 */
class LabelSelectorRequirement extends AbstractModel
{

    /**
     * @var string
     * key is the label key that the selector applies to.
     */
    public $key;

    /**
     * @var string
     * operator represents a key's relationship to a set of values.
     * Valid operators ard In, NotIn, Exists and DoesNotExist.
     */
    public $operator;

    /**
     * @var string[]
     * values is an array of string values.
     * If the operator is In or NotIn, the values array must be non-empty.
     * If the operator is Exists or DoesNotExist, the values array must be empty.
     * This array is replaced during a strategic merge patch.
     */
    public $values;
}
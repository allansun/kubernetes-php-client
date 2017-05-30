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
 * StatusCause provides more information about an api.Status failure, including cases when multiple errors are
 * encountered.
 *
 * @package Kubernetes\Model
 */
class StatusCause extends AbstractModel
{

    /**
     * @var string
     *
     *    The field of the resource that has caused this error, as named by its JSON serialization. May include dot and
     *    postfix notation for nested attributes. Arrays are zero-indexed. Fields may appear more than once in an array
     *    of causes due to fields having multiple errors. Optional. Examples: "name" - the field "name" on the current
     *    resource "items[0].name" - the field "name" on the first array entry in "items"
     */
    public $field;

    /**
     * @var string
     * A human-readable description of the cause of the error. This field may be presented as-is to a reader.
     */
    public $message;

    /**
     * @var string
     * A machine-readable description of the cause of the error. If this value is empty there is no information
     * available.
     */
    public $reason;

}
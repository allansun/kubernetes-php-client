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
 * Information about the condition of a component.
 *
 * @package Kubernetes\Model
 */
class ComponentCondition extends AbstractModel
{
    /**
     * @var string
     * Condition error code for a component. For example, a health check error code.
     */
    public $error;

    /**
     * @var string
     * Message about the condition for a component. For example, information about a health check.
     */
    public $message;

    /**
     * @var string
     * Status of the condition for a component. Valid values for "Healthy": "True", "False", or "Unknown".
     */
    public $status;

    /**
     * @var string
     * Type of condition for a component. Valid value: "Healthy"
     */
    public $type;
}
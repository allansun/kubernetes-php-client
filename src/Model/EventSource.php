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
 * EventSource contains information for an event.
 *
 * @package Kubernetes\Model
 */
class EventSource extends AbstractModel
{
    /**
     * @var string
     * Component from which the event is generated.
     */
    public $component;

    /**
     * @var string
     * Node name on which the event is generated.
     */
    public $host;
}
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
 * AttachedVolume describes a volume attached to a node
 *
 * @package Kubernetes\Model
 */
class AttachedVolume extends AbstractModel
{
    /**
     * @var string
     * DevicePath represents the device path where the volume should be available
     */
    public $devicePath;

    /**
     * @var string
     * Name of the attached volume
     */
    public $name;
}
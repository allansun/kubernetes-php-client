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
 * ResourceRequirements describes the compute resource requirements.
 *
 * @package Kubernetes\Model
 */
class ResourceRequirements extends AbstractModel
{

    /**
     * @var object
     * Limits describes the maximum amount of compute resources allowed.
     * More info: http://kubernetes.io/docs/user-guide/compute-resources/
     */
    public $limits;

    /**
     * @var object
     * Requests describes the minimum amount of compute resources required.
     * If Requests is omitted for a container, it defaults to Limits if that is explicitly specified,
     * otherwise to an implementation-defined value.
     * More info: http://kubernetes.io/docs/user-guide/compute-resources/
     */
    public $requests;
}
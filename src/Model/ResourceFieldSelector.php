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
 * ResourceFieldSelector represents container resources (cpu, memory) and their output format
 *
 * @package Kubernetes\Model
 */
class ResourceFieldSelector extends AbstractModel
{
    /**
     * @var string
     * Container name: required for volumes, optional for env vars
     */
    public $containerName;

    /**
     * @var Quantity
     * Specifies the output format of the exposed resources, defaults to "1"
     */
    public $divisor;

    /**
     * @var string
     * Required: resource to select
     */
    public $resource;

    /**
     * @param Quantity $divisor
     *
     * @return self
     */
    public function setDivisor($divisor)
    {
        $this->divisor = $this->_createPropertyValue($divisor, Quantity::class, false);

        return $this;
    }

}
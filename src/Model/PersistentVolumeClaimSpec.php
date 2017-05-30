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


class PersistentVolumeClaimSpec extends AbstractModel
{

    /**
     * @var string[]
     * AccessModes contains the desired access modes the volume should have. More info:
     * http://kubernetes.io/docs/user-guide/persistent-volumes#access-modes-1
     */
    public $accessModes;

    /**
     * @var ResourceRequirements
     * Resources represents the minimum resources the volume should have. More info:
     * http://kubernetes.io/docs/user-guide/persistent-volumes#resources
     */
    public $resources;

    /**
     * @var LabelSelector
     * A label query over volumes to consider for binding.
     */
    public $selector;

    /**
     * @var string
     * Name of the StorageClass required by the claim. More info:
     * http://kubernetes.io/docs/user-guide/persistent-volumes#class-1
     */
    public $storageClassName;

    /**
     * @var string
     * VolumeName is the binding reference to the PersistentVolume backing this claim.
     */
    public $volumeName;

    /**
     * @param ResourceRequirements $resources
     *
     * @return self
     */
    public function setResources($resources)
    {
        $this->resources = $this->_createPropertyValue($resources, ResourceRequirements::class, false);

        return $this;
    }

    /**
     * @param LabelSelector $selector
     *
     * @return self
     */
    public function setSelector($selector)
    {
        $this->selector = $this->_createPropertyValue($selector, LabelSelector::class, false);

        return $this;
    }


}
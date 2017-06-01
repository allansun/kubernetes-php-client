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


class NodeStatus extends AbstractModel
{
    /**
     * @var NodeAddress[]
     * List of addresses reachable to the node. Queried from cloud provider, if available. More info:
     * http://releases.k8s.io/HEAD/docs/admin/node.md#node-addresses
     */
    public $addresses;

    /**
     * @var \StdClass
     * Allocatable represents the resources of a node that are available for scheduling. Defaults to Capacity.
     */
    public $allocatable;

    /**
     * @var \StdClass
     * Capacity represents the total resources of a node. More info:
     * http://kubernetes.io/docs/user-guide/persistent-volumes#capacity for more details.
     */
    public $capacity;

    /**
     * @var NodeCondition[]
     * Conditions is an array of current observed node conditions. More info:
     * http://releases.k8s.io/HEAD/docs/admin/node.md#node-condition
     */
    public $conditions;

    /**
     * @var NodeDaemonEndpoints
     * Endpoints of daemons running on the Node.
     */
    public $daemonEndpoints;

    /**
     * @var ContainerImage[]
     * List of container images on this node
     */
    public $images;

    /**
     * @var NodeSystemInfo[]
     * Set of ids/uuids to uniquely identify the node. More info:
     * http://releases.k8s.io/HEAD/docs/admin/node.md#node-info
     */
    public $nodeInfo;

    /**
     * @var string
     * NodePhase is the recently observed lifecycle phase of the node. More info:
     * http://releases.k8s.io/HEAD/docs/admin/node.md#node-phase The field is never populated, and now is deprecated.
     */
    public $phase;

    /**
     * @var AttachedVolume[]
     * List of volumes that are attached to the node.
     */
    public $volumesAttached;

    /**
     * @var string[]
     * List of attachable volumes in use (mounted) by the node.
     */
    public $volumesInUse;

    /**
     * @param NodeAddress[] $addresses
     *
     * @return self
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $this->_createPropertyValue($addresses, NodeAddress::class, true);

        return $this;
    }

    /**
     * @param NodeCondition[] $conditions
     *
     * @return self
     */
    public function setConditions($conditions)
    {
        $this->conditions = $this->_createPropertyValue($conditions, NodeCondition::class, true);

        return $this;
    }

    /**
     * @param NodeDaemonEndpoints $daemonEndpoints
     *
     * @return self
     */
    public function setDaemonEndpoints($daemonEndpoints)
    {
        $this->daemonEndpoints = $this->_createPropertyValue($daemonEndpoints, NodeDaemonEndpoints::class, false);

        return $this;
    }

    /**
     * @param ContainerImage[] $images
     *
     * @return self
     */
    public function setImages($images)
    {
        $this->images = $this->_createPropertyValue($images, ContainerImage::class, true);

        return $this;
    }

    /**
     * @param NodeSystemInfo[] $nodeInfo
     *
     * @return self
     */
    public function setNodeInfo($nodeInfo)
    {
        $this->nodeInfo = $this->_createPropertyValue($nodeInfo, NodeSystemInfo::class, true);

        return $this;
    }

    /**
     * @param AttachedVolume[] $volumesAttached
     *
     * @return self
     */
    public function setVolumesAttached($volumesAttached)
    {
        $this->volumesAttached = $this->_createPropertyValue($volumesAttached, AttachedVolume::class, true);

        return $this;
    }

}
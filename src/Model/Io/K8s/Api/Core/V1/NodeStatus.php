<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * NodeStatus is information about the current status of a node.
 */
class NodeStatus extends \Kubernetes\AbstractModel
{

    /**
     * List of addresses reachable to the node. Queried from cloud provider, if
     * available. More info: https://kubernetes.io/docs/concepts/nodes/node/#addresses
     *
     * @var NodeAddress[]
     */
    public $addresses = null;

    /**
     * Allocatable represents the resources of a node that are available for
     * scheduling. Defaults to Capacity.
     *
     * @var object
     */
    public $allocatable = null;

    /**
     * Capacity represents the total resources of a node. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#capacity
     *
     * @var object
     */
    public $capacity = null;

    /**
     * Conditions is an array of current observed node conditions. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#condition
     *
     * @var NodeCondition[]
     */
    public $conditions = null;

    /**
     * Endpoints of daemons running on the Node.
     *
     * @var NodeDaemonEndpoints
     */
    public $daemonEndpoints = null;

    /**
     * List of container images on this node
     *
     * @var ContainerImage[]
     */
    public $images = null;

    /**
     * Set of ids/uuids to uniquely identify the node. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#info
     *
     * @var NodeSystemInfo
     */
    public $nodeInfo = null;

    /**
     * NodePhase is the recently observed lifecycle phase of the node. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#phase The field is never
     * populated, and now is deprecated.
     *
     * @var string
     */
    public $phase = null;

    /**
     * List of volumes that are attached to the node.
     *
     * @var AttachedVolume[]
     */
    public $volumesAttached = null;

    /**
     * List of attachable volumes in use (mounted) by the node.
     *
     * @var string[]
     */
    public $volumesInUse = null;


}


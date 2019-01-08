<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1;

/**
 * DaemonSetStatus represents the current status of a daemon set.
 */
class DaemonSetStatus extends \Kubernetes\AbstractModel
{

    /**
     * Count of hash collisions for the DaemonSet. The DaemonSet controller uses this
     * field as a collision avoidance mechanism when it needs to create the name for
     * the newest ControllerRevision.
     *
     * @var integer
     */
    public $collisionCount = null;

    /**
     * Represents the latest available observations of a DaemonSet's current state.
     *
     * @var DaemonSetCondition[]
     */
    public $conditions = null;

    /**
     * The number of nodes that are running at least 1 daemon pod and are supposed to
     * run the daemon pod. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/daemonset/
     *
     * @var integer
     */
    public $currentNumberScheduled = null;

    /**
     * The total number of nodes that should be running the daemon pod (including nodes
     * correctly running the daemon pod). More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/daemonset/
     *
     * @var integer
     */
    public $desiredNumberScheduled = null;

    /**
     * The number of nodes that should be running the daemon pod and have one or more
     * of the daemon pod running and available (ready for at least
     * spec.minReadySeconds)
     *
     * @var integer
     */
    public $numberAvailable = null;

    /**
     * The number of nodes that are running the daemon pod, but are not supposed to run
     * the daemon pod. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/daemonset/
     *
     * @var integer
     */
    public $numberMisscheduled = null;

    /**
     * The number of nodes that should be running the daemon pod and have one or more
     * of the daemon pod running and ready.
     *
     * @var integer
     */
    public $numberReady = null;

    /**
     * The number of nodes that should be running the daemon pod and have none of the
     * daemon pod running and available (ready for at least spec.minReadySeconds)
     *
     * @var integer
     */
    public $numberUnavailable = null;

    /**
     * The most recent generation observed by the daemon set controller.
     *
     * @var integer
     */
    public $observedGeneration = null;

    /**
     * The total number of nodes that are running updated daemon pod
     *
     * @var integer
     */
    public $updatedNumberScheduled = null;


}


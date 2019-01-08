<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * ReplicationControllerStatus represents the current status of a replication
 * controller.
 */
class ReplicationControllerStatus extends \Kubernetes\AbstractModel
{

    /**
     * The number of available replicas (ready for at least minReadySeconds) for this
     * replication controller.
     *
     * @var integer
     */
    public $availableReplicas = null;

    /**
     * Represents the latest available observations of a replication controller's
     * current state.
     *
     * @var ReplicationControllerCondition[]
     */
    public $conditions = null;

    /**
     * The number of pods that have labels matching the labels of the pod template of
     * the replication controller.
     *
     * @var integer
     */
    public $fullyLabeledReplicas = null;

    /**
     * ObservedGeneration reflects the generation of the most recently observed
     * replication controller.
     *
     * @var integer
     */
    public $observedGeneration = null;

    /**
     * The number of ready replicas for this replication controller.
     *
     * @var integer
     */
    public $readyReplicas = null;

    /**
     * Replicas is the most recently oberved number of replicas. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller#what-is-a-replicationcontroller
     *
     * @var integer
     */
    public $replicas = null;


}


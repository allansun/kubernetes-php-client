<?php

namespace Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1;

/**
 * ReplicaSetStatus represents the current status of a ReplicaSet.
 */
class ReplicaSetStatus extends \Kubernetes\AbstractModel
{

    /**
     * The number of available replicas (ready for at least minReadySeconds) for this
     * replica set.
     *
     * @var integer
     */
    public $availableReplicas = null;

    /**
     * Represents the latest available observations of a replica set's current state.
     *
     * @var ReplicaSetCondition[]
     */
    public $conditions = null;

    /**
     * The number of pods that have labels matching the labels of the pod template of
     * the replicaset.
     *
     * @var integer
     */
    public $fullyLabeledReplicas = null;

    /**
     * ObservedGeneration reflects the generation of the most recently observed
     * ReplicaSet.
     *
     * @var integer
     */
    public $observedGeneration = null;

    /**
     * The number of ready replicas for this replica set.
     *
     * @var integer
     */
    public $readyReplicas = null;

    /**
     * Replicas is the most recently oberved number of replicas. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller/#what-is-a-replicationcontroller
     *
     * @var integer
     */
    public $replicas = null;


}


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


class ReplicaSetStatus extends AbstractModel
{

    /**
     * @var integer
     * The number of available replicas (ready for at least minReadySeconds) for this replica set.
     */
    public $availableReplicas;

    /**
     * @var ReplicaSetCondition[]
     * Represents the latest available observations of a replica set's current state.
     */
    public $conditions;

    /**
     * @var integer
     * The number of pods that have labels matching the labels of the pod template of the replicaset.
     */
    public $fullyLabeledReplicas;

    /**
     * @var integer
     * ObservedGeneration reflects the generation of the most recently observed ReplicaSet.
     */
    public $observedGeneration;

    /**
     * @var integer
     * The number of ready replicas for this replica set.
     */
    public $readyReplicas;

    /**
     * @var integer
     * Replicas is the most recently oberved number of replicas. More info:
     * http://kubernetes.io/docs/user-guide/replication-controller#what-is-a-replication-controller
     */
    public $replicas;

    /**
     * @param ReplicaSetCondition[] $conditions
     *
     * @return self
     */
    public function setConditions($conditions)
    {
        $this->conditions = $this->_createPropertyValue($conditions, ReplicaSetCondition::class, true);

        return $this;
    }


}
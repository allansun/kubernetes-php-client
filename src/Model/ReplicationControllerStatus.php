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


class ReplicationControllerStatus extends AbstractModel
{

    /**
     * @var integer
     * The number of available replicas (ready for at least minReadySeconds) for this replication controller.
     */
    public $availableReplicas;

    /**
     * @var ReplicationControllerCondition[]
     * Represents the latest available observations of a replication controller's current state.
     */
    public $conditions;

    /**
     * @var integer
     * The number of pods that have labels matching the labels of the pod template of the replication controller.
     */
    public $fullyLabeledReplicas;

    /**
     * @var integer
     * ObservedGeneration reflects the generation of the most recently observed replication controller.
     */
    public $observedGeneration;

    /**
     * @var integer
     * The number of ready replicas for this replication controller.
     */
    public $readyReplicas;

    /**
     * @var integer
     * Replicas is the most recently oberved number of replicas. More info:
     * http://kubernetes.io/docs/user-guide/replication-controller#what-is-a-replication-controller
     */
    public $replicas;

    /**
     * @param ReplicationControllerCondition[] $conditions
     *
     * @return self
     */
    public function setConditions($conditions)
    {
        $this->conditions = $this->_createPropertyValue($conditions, ReplicationControllerCondition::class, true);

        return $this;
    }

}
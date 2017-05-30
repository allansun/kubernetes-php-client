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


class DeploymentStatus extends AbstractModel
{
    /**
     * @var integer
     * Total number of available pods (ready for at least minReadySeconds) targeted by this deployment.
     */
    public $availableReplicas;

    /**
     * @var DeploymentCondition[]
     * Represents the latest available observations of a deployment's current state.
     */
    public $conditions;

    /**
     * @var integer
     * The generation observed by the deployment controller.
     */
    public $observedGeneration;

    /**
     * @var integer
     * Total number of ready pods targeted by this deployment.
     */
    public $readyReplicas;

    /**
     * @var integer
     * Total number of non-terminated pods targeted by this deployment (their labels match the selector).
     */
    public $replicas;

    /**
     * @var integer
     * Total number of unavailable pods targeted by this deployment.
     */
    public $unavailableReplicas;

    /**
     * @var integer
     * Total number of non-terminated pods targeted by this deployment that have the desired template spec.
     */
    public $updatedReplicas;

    /**
     * @param DeploymentCondition[] $conditions
     *
     * @return self
     */
    public function setConditions($conditions)
    {
        $this->conditions = $this->_createPropertyValue($conditions, DeploymentCondition::class, true);

        return $this;
    }

}
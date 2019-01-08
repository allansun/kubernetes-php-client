<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1beta1;

/**
 * DeploymentStatus is the most recently observed status of the Deployment.
 */
class DeploymentStatus extends \Kubernetes\AbstractModel
{

    /**
     * Total number of available pods (ready for at least minReadySeconds) targeted by
     * this deployment.
     *
     * @var integer
     */
    public $availableReplicas = null;

    /**
     * Count of hash collisions for the Deployment. The Deployment controller uses this
     * field as a collision avoidance mechanism when it needs to create the name for
     * the newest ReplicaSet.
     *
     * @var integer
     */
    public $collisionCount = null;

    /**
     * Represents the latest available observations of a deployment's current state.
     *
     * @var DeploymentCondition[]
     */
    public $conditions = null;

    /**
     * The generation observed by the deployment controller.
     *
     * @var integer
     */
    public $observedGeneration = null;

    /**
     * Total number of ready pods targeted by this deployment.
     *
     * @var integer
     */
    public $readyReplicas = null;

    /**
     * Total number of non-terminated pods targeted by this deployment (their labels
     * match the selector).
     *
     * @var integer
     */
    public $replicas = null;

    /**
     * Total number of unavailable pods targeted by this deployment. This is the total
     * number of pods that are still required for the deployment to have 100% available
     * capacity. They may either be pods that are running but not yet available or pods
     * that still have not been created.
     *
     * @var integer
     */
    public $unavailableReplicas = null;

    /**
     * Total number of non-terminated pods targeted by this deployment that have the
     * desired template spec.
     *
     * @var integer
     */
    public $updatedReplicas = null;


}


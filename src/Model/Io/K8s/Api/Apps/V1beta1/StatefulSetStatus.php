<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1beta1;

/**
 * StatefulSetStatus represents the current state of a StatefulSet.
 */
class StatefulSetStatus extends \Kubernetes\AbstractModel
{

    /**
     * collisionCount is the count of hash collisions for the StatefulSet. The
     * StatefulSet controller uses this field as a collision avoidance mechanism when
     * it needs to create the name for the newest ControllerRevision.
     *
     * @var integer
     */
    public $collisionCount = null;

    /**
     * Represents the latest available observations of a statefulset's current state.
     *
     * @var StatefulSetCondition[]
     */
    public $conditions = null;

    /**
     * currentReplicas is the number of Pods created by the StatefulSet controller from
     * the StatefulSet version indicated by currentRevision.
     *
     * @var integer
     */
    public $currentReplicas = null;

    /**
     * currentRevision, if not empty, indicates the version of the StatefulSet used to
     * generate Pods in the sequence [0,currentReplicas).
     *
     * @var string
     */
    public $currentRevision = null;

    /**
     * observedGeneration is the most recent generation observed for this StatefulSet.
     * It corresponds to the StatefulSet's generation, which is updated on mutation by
     * the API Server.
     *
     * @var integer
     */
    public $observedGeneration = null;

    /**
     * readyReplicas is the number of Pods created by the StatefulSet controller that
     * have a Ready Condition.
     *
     * @var integer
     */
    public $readyReplicas = null;

    /**
     * replicas is the number of Pods created by the StatefulSet controller.
     *
     * @var integer
     */
    public $replicas = null;

    /**
     * updateRevision, if not empty, indicates the version of the StatefulSet used to
     * generate Pods in the sequence [replicas-updatedReplicas,replicas)
     *
     * @var string
     */
    public $updateRevision = null;

    /**
     * updatedReplicas is the number of Pods created by the StatefulSet controller from
     * the StatefulSet version indicated by updateRevision.
     *
     * @var integer
     */
    public $updatedReplicas = null;


}


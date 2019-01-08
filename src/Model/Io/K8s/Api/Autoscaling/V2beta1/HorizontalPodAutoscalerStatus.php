<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta1;

/**
 * HorizontalPodAutoscalerStatus describes the current status of a horizontal pod
 * autoscaler.
 */
class HorizontalPodAutoscalerStatus extends \Kubernetes\AbstractModel
{

    /**
     * conditions is the set of conditions required for this autoscaler to scale its
     * target, and indicates whether or not those conditions are met.
     *
     * @var HorizontalPodAutoscalerCondition[]
     */
    public $conditions = null;

    /**
     * currentMetrics is the last read state of the metrics used by this autoscaler.
     *
     * @var MetricStatus[]
     */
    public $currentMetrics = null;

    /**
     * currentReplicas is current number of replicas of pods managed by this
     * autoscaler, as last seen by the autoscaler.
     *
     * @var integer
     */
    public $currentReplicas = null;

    /**
     * desiredReplicas is the desired number of replicas of pods managed by this
     * autoscaler, as last calculated by the autoscaler.
     *
     * @var integer
     */
    public $desiredReplicas = null;

    /**
     * lastScaleTime is the last time the HorizontalPodAutoscaler scaled the number of
     * pods, used by the autoscaler to control how often the number of pods is changed.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastScaleTime = null;

    /**
     * observedGeneration is the most recent generation observed by this autoscaler.
     *
     * @var integer
     */
    public $observedGeneration = null;


}


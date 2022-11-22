<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta2;

use \KubernetesRuntime\AbstractModel;

/**
 * HorizontalPodAutoscalerSpec describes the desired functionality of the
 * HorizontalPodAutoscaler.
 */
class HorizontalPodAutoscalerSpec extends AbstractModel
{

    /**
     * behavior configures the scaling behavior of the target in both Up and Down
     * directions (scaleUp and scaleDown fields respectively). If not set, the default
     * HPAScalingRules for scale up and scale down are used.
     *
     * @var HorizontalPodAutoscalerBehavior
     */
    public $behavior = null;

    /**
     * maxReplicas is the upper limit for the number of replicas to which the
     * autoscaler can scale up. It cannot be less that minReplicas.
     *
     * @var integer
     */
    public $maxReplicas = null;

    /**
     * metrics contains the specifications for which to use to calculate the desired
     * replica count (the maximum replica count across all metrics will be used).  The
     * desired replica count is calculated multiplying the ratio between the target
     * value and the current value by the current number of pods.  Ergo, metrics used
     * must decrease as the pod count is increased, and vice-versa.  See the individual
     * metric source types for more information about how each type of metric must
     * respond. If not set, the default metric will be set to 80% average CPU
     * utilization.
     *
     * @var MetricSpec[]
     */
    public $metrics = null;

    /**
     * minReplicas is the lower limit for the number of replicas to which the
     * autoscaler can scale down.  It defaults to 1 pod.  minReplicas is allowed to be
     * 0 if the alpha feature gate HPAScaleToZero is enabled and at least one Object or
     * External metric is configured.  Scaling is active as long as at least one metric
     * value is available.
     *
     * @var integer
     */
    public $minReplicas = null;

    /**
     * scaleTargetRef points to the target resource to scale, and is used to the pods
     * for which metrics should be collected, as well as to actually change the replica
     * count.
     *
     * @var CrossVersionObjectReference
     */
    public $scaleTargetRef = null;


}


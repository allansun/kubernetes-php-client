<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V1;

/**
 * specification of a horizontal pod autoscaler.
 */
class HorizontalPodAutoscalerSpec extends \Kubernetes\AbstractModel
{

    /**
     * upper limit for the number of pods that can be set by the autoscaler; cannot be
     * smaller than MinReplicas.
     *
     * @var integer
     */
    public $maxReplicas = null;

    /**
     * lower limit for the number of pods that can be set by the autoscaler, default 1.
     *
     * @var integer
     */
    public $minReplicas = null;

    /**
     * reference to scaled resource; horizontal pod autoscaler will learn the current
     * resource consumption and will set the desired number of pods by using its Scale
     * subresource.
     *
     * @var CrossVersionObjectReference
     */
    public $scaleTargetRef = null;

    /**
     * target average CPU utilization (represented as a percentage of requested CPU)
     * over all the pods; if not specified the default autoscaling policy will be used.
     *
     * @var integer
     */
    public $targetCPUUtilizationPercentage = null;


}


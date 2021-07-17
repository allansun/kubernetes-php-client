<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * ExternalMetricSource indicates how to scale on a metric not associated with any
 * Kubernetes object (for example length of queue in cloud messaging service, or
 * QPS from loadbalancer running outside of cluster). Exactly one "target" type
 * should be set.
 */
class ExternalMetricSource extends AbstractModel
{

    /**
     * metricName is the name of the metric in question.
     *
     * @var string
     */
    public $metricName = null;

    /**
     * metricSelector is used to identify a specific time series within a given metric.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $metricSelector = null;

    /**
     * targetAverageValue is the target per-pod value of global metric (as a quantity).
     * Mutually exclusive with TargetValue.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Api\Resource\Quantity
     */
    public $targetAverageValue = null;

    /**
     * targetValue is the target value of the metric (as a quantity). Mutually
     * exclusive with TargetAverageValue.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Api\Resource\Quantity
     */
    public $targetValue = null;


}


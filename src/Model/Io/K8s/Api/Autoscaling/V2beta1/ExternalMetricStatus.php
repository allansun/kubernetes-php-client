<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta1;

/**
 * ExternalMetricStatus indicates the current value of a global metric not
 * associated with any Kubernetes object.
 */
class ExternalMetricStatus extends \Kubernetes\AbstractModel
{

    /**
     * currentAverageValue is the current value of metric averaged over autoscaled
     * pods.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Api\Resource\Quantity
     */
    public $currentAverageValue = null;

    /**
     * currentValue is the current value of the metric (as a quantity)
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Api\Resource\Quantity
     */
    public $currentValue = null;

    /**
     * metricName is the name of a metric used for autoscaling in metric system.
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


}


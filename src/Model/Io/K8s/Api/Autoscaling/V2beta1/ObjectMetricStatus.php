<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta1;

/**
 * ObjectMetricStatus indicates the current value of a metric describing a
 * kubernetes object (for example, hits-per-second on an Ingress object).
 */
class ObjectMetricStatus extends \Kubernetes\AbstractModel
{

    /**
     * averageValue is the current value of the average of the metric across all
     * relevant pods (as a quantity)
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Api\Resource\Quantity
     */
    public $averageValue = null;

    /**
     * currentValue is the current value of the metric (as a quantity).
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Api\Resource\Quantity
     */
    public $currentValue = null;

    /**
     * metricName is the name of the metric in question.
     *
     * @var string
     */
    public $metricName = null;

    /**
     * selector is the string-encoded form of a standard kubernetes label selector for
     * the given metric When set in the ObjectMetricSource, it is passed as an
     * additional parameter to the metrics server for more specific metrics scoping.
     * When unset, just the metricName will be used to gather metrics.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $selector = null;

    /**
     * target is the described Kubernetes object.
     *
     * @var CrossVersionObjectReference
     */
    public $target = null;


}


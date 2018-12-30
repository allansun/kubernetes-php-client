<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta1;

/**
 * ObjectMetricStatus indicates the current value of a metric describing a
 * kubernetes object (for example, hits-per-second on an Ingress object).
 */
class ObjectMetricStatus extends \Kubernetes\AbstractModel
{

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
     * target is the described Kubernetes object.
     *
     * @var CrossVersionObjectReference
     */
    public $target = null;


}


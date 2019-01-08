<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta1;

/**
 * ObjectMetricSource indicates how to scale on a metric describing a kubernetes
 * object (for example, hits-per-second on an Ingress object).
 */
class ObjectMetricSource extends \Kubernetes\AbstractModel
{

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

    /**
     * targetValue is the target value of the metric (as a quantity).
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Api\Resource\Quantity
     */
    public $targetValue = null;


}


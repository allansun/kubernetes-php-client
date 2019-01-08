<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta2;

/**
 * MetricValueStatus holds the current value for a metric
 */
class MetricValueStatus extends \Kubernetes\AbstractModel
{

    /**
     * currentAverageUtilization is the current value of the average of the resource
     * metric across all relevant pods, represented as a percentage of the requested
     * value of the resource for the pods.
     *
     * @var integer
     */
    public $averageUtilization = null;

    /**
     * averageValue is the current value of the average of the metric across all
     * relevant pods (as a quantity)
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Api\Resource\Quantity
     */
    public $averageValue = null;

    /**
     * value is the current value of the metric (as a quantity).
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Api\Resource\Quantity
     */
    public $value = null;


}


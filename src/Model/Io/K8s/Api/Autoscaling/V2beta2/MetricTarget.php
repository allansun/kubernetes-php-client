<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta2;

/**
 * MetricTarget defines the target value, average value, or average utilization of
 * a specific metric
 */
class MetricTarget extends \Kubernetes\AbstractModel
{

    /**
     * averageUtilization is the target value of the average of the resource metric
     * across all relevant pods, represented as a percentage of the requested value of
     * the resource for the pods. Currently only valid for Resource metric source type
     *
     * @var integer
     */
    public $averageUtilization = null;

    /**
     * averageValue is the target value of the average of the metric across all
     * relevant pods (as a quantity)
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Api\Resource\Quantity
     */
    public $averageValue = null;

    /**
     * type represents whether the metric type is Utilization, Value, or AverageValue
     *
     * @var string
     */
    public $type = null;

    /**
     * value is the target value of the metric (as a quantity).
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Api\Resource\Quantity
     */
    public $value = null;


}


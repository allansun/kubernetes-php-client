<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta2;

/**
 * ObjectMetricStatus indicates the current value of a metric describing a
 * kubernetes object (for example, hits-per-second on an Ingress object).
 */
class ObjectMetricStatus extends \Kubernetes\AbstractModel
{

    /**
     * current contains the current value for the given metric
     *
     * @var MetricValueStatus
     */
    public $current = null;

    /**
     * @var CrossVersionObjectReference
     */
    public $describedObject = null;

    /**
     * metric identifies the target metric by name and selector
     *
     * @var MetricIdentifier
     */
    public $metric = null;


}


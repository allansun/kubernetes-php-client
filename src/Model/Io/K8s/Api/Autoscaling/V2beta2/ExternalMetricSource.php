<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta2;

/**
 * ExternalMetricSource indicates how to scale on a metric not associated with any
 * Kubernetes object (for example length of queue in cloud messaging service, or
 * QPS from loadbalancer running outside of cluster).
 */
class ExternalMetricSource extends \Kubernetes\AbstractModel
{

    /**
     * metric identifies the target metric by name and selector
     *
     * @var MetricIdentifier
     */
    public $metric = null;

    /**
     * target specifies the target value for the given metric
     *
     * @var MetricTarget
     */
    public $target = null;


}


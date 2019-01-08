<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta2;

/**
 * PodsMetricStatus indicates the current value of a metric describing each pod in
 * the current scale target (for example, transactions-processed-per-second).
 */
class PodsMetricStatus extends \Kubernetes\AbstractModel
{

    /**
     * current contains the current value for the given metric
     *
     * @var MetricValueStatus
     */
    public $current = null;

    /**
     * metric identifies the target metric by name and selector
     *
     * @var MetricIdentifier
     */
    public $metric = null;


}


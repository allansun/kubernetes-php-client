<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta2;

/**
 * PodsMetricSource indicates how to scale on a metric describing each pod in the
 * current scale target (for example, transactions-processed-per-second). The
 * values will be averaged together before being compared to the target value.
 */
class PodsMetricSource extends \Kubernetes\AbstractModel
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


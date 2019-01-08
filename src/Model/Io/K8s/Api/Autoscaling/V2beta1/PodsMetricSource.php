<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta1;

/**
 * PodsMetricSource indicates how to scale on a metric describing each pod in the
 * current scale target (for example, transactions-processed-per-second). The
 * values will be averaged together before being compared to the target value.
 */
class PodsMetricSource extends \Kubernetes\AbstractModel
{

    /**
     * metricName is the name of the metric in question
     *
     * @var string
     */
    public $metricName = null;

    /**
     * targetAverageValue is the target value of the average of the metric across all
     * relevant pods (as a quantity)
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Api\Resource\Quantity
     */
    public $targetAverageValue = null;


}


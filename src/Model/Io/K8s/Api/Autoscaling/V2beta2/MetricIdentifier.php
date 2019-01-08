<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta2;

/**
 * MetricIdentifier defines the name and optionally selector for a metric
 */
class MetricIdentifier extends \Kubernetes\AbstractModel
{

    /**
     * name is the name of the given metric
     *
     * @var string
     */
    public $name = null;

    /**
     * selector is the string-encoded form of a standard kubernetes label selector for
     * the given metric When set, it is passed as an additional parameter to the
     * metrics server for more specific metrics scoping. When unset, just the
     * metricName will be used to gather metrics.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $selector = null;


}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta2;

/**
 * ResourceMetricStatus indicates the current value of a resource metric known to
 * Kubernetes, as specified in requests and limits, describing each pod in the
 * current scale target (e.g. CPU or memory).  Such metrics are built in to
 * Kubernetes, and have special scaling options on top of those available to normal
 * per-pod metrics using the "pods" source.
 */
class ResourceMetricStatus extends \Kubernetes\AbstractModel
{

    /**
     * current contains the current value for the given metric
     *
     * @var MetricValueStatus
     */
    public $current = null;

    /**
     * Name is the name of the resource in question.
     *
     * @var string
     */
    public $name = null;


}


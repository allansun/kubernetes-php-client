<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * ContainerResourceMetricStatus indicates the current value of a resource metric
 * known to Kubernetes, as specified in requests and limits, describing a single
 * container in each pod in the current scale target (e.g. CPU or memory).  Such
 * metrics are built in to Kubernetes, and have special scaling options on top of
 * those available to normal per-pod metrics using the "pods" source.
 */
class ContainerResourceMetricStatus extends AbstractModel
{

    /**
     * container is the name of the container in the pods of the scaling target
     *
     * @var string
     */
    public $container = null;

    /**
     * currentAverageUtilization is the current value of the average of the resource
     * metric across all relevant pods, represented as a percentage of the requested
     * value of the resource for the pods.  It will only be present if
     * `targetAverageValue` was set in the corresponding metric specification.
     *
     * @var integer
     */
    public $currentAverageUtilization = null;

    /**
     * currentAverageValue is the current value of the average of the resource metric
     * across all relevant pods, as a raw value (instead of as a percentage of the
     * request), similar to the "pods" metric source type. It will always be set,
     * regardless of the corresponding metric specification.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Api\Resource\Quantity
     */
    public $currentAverageValue = null;

    /**
     * name is the name of the resource in question.
     *
     * @var string
     */
    public $name = null;


}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2;

use \KubernetesRuntime\AbstractModel;

/**
 * ExternalMetricStatus indicates the current value of a global metric not
 * associated with any Kubernetes object.
 */
class ExternalMetricStatus extends AbstractModel
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


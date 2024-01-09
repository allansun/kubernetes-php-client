<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2;

use \KubernetesRuntime\AbstractModel;

/**
 * ObjectMetricSource indicates how to scale on a metric describing a kubernetes
 * object (for example, hits-per-second on an Ingress object).
 */
class ObjectMetricSource extends AbstractModel
{
    /**
     * describedObject specifies the descriptions of a object,such as kind,name
     * apiVersion
     *
     * @var CrossVersionObjectReference
     */
    public $describedObject = null;

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


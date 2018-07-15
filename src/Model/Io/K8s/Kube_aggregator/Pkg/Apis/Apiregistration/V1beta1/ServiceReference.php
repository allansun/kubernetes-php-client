<?php

namespace Kubernetes\Model\Io\K8s\Kube_aggregator\Pkg\Apis\Apiregistration\V1beta1;

/**
 * ServiceReference holds a reference to Service.legacy.k8s.io
 */
class ServiceReference extends \Kubernetes\AbstractModel
{

    /**
     * Name is the name of the service
     *
     * @var string
     */
    public $name = null;

    /**
     * Namespace is the namespace of the service
     *
     * @var string
     */
    public $namespace = null;


}


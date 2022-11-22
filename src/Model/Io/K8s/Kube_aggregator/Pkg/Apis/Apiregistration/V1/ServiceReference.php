<?php

namespace Kubernetes\Model\Io\K8s\Kube_aggregator\Pkg\Apis\Apiregistration\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ServiceReference holds a reference to Service.legacy.k8s.io
 */
class ServiceReference extends AbstractModel
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

    /**
     * If specified, the port on the service that hosting webhook. Default to 443 for
     * backward compatibility. `port` should be a valid port number (1-65535,
     * inclusive).
     *
     * @var integer
     */
    public $port = null;


}


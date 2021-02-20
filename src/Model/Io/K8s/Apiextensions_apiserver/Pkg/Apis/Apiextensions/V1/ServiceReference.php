<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ServiceReference holds a reference to Service.legacy.k8s.io
 */
class ServiceReference extends AbstractModel
{

    /**
     * name is the name of the service. Required
     *
     * @var string
     */
    public $name = null;

    /**
     * namespace is the namespace of the service. Required
     *
     * @var string
     */
    public $namespace = null;

    /**
     * path is an optional URL path at which the webhook will be contacted.
     *
     * @var string
     */
    public $path = null;

    /**
     * port is an optional service port at which the webhook will be contacted. `port`
     * should be a valid port number (1-65535, inclusive). Defaults to 443 for backward
     * compatibility.
     *
     * @var integer
     */
    public $port = null;


}


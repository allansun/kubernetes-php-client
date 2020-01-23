<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

/**
 * ServiceReference holds a reference to Service.legacy.k8s.io
 */
class ServiceReference extends \KubernetesRuntime\AbstractModel
{

    /**
     * `name` is the name of the service. Required
     *
     * @var string
     */
    public $name = null;

    /**
     * `namespace` is the namespace of the service. Required
     *
     * @var string
     */
    public $namespace = null;

    /**
     * `path` is an optional URL path which will be sent in any request to this
     * service.
     *
     * @var string
     */
    public $path = null;

    /**
     * If specified, the port on the service that hosting webhook. Default to 443 for
     * backward compatibility. `port` should be a valid port number (1-65535,
     * inclusive).
     *
     * @var integer
     */
    public $port = null;


}


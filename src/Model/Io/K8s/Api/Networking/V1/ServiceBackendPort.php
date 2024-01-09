<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ServiceBackendPort is the service port being referenced.
 */
class ServiceBackendPort extends AbstractModel
{
    /**
     * Name is the name of the port on the Service. This is a mutually exclusive
     * setting with "Number".
     *
     * @var string
     */
    public $name = null;

    /**
     * Number is the numerical port number (e.g. 80) on the Service. This is a mutually
     * exclusive setting with "Name".
     *
     * @var integer
     */
    public $number = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * PodDNSConfigOption defines DNS resolver options of a pod.
 */
class PodDNSConfigOption extends AbstractModel
{
    /**
     * Required.
     *
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $value = null;
}


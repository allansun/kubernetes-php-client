<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * PodOS defines the OS parameters of a pod.
 */
class PodOS extends AbstractModel
{

    /**
     * Name is the name of the operating system. The currently supported values are
     * linux and windows. Additional value may be defined in future and can be one of:
     * https://github.com/opencontainers/runtime-spec/blob/master/config.md#platform-specific-configuration
     * Clients should expect to handle additional values and treat unrecognized values
     * in this field as os: null
     *
     * @var string
     */
    public $name = null;


}


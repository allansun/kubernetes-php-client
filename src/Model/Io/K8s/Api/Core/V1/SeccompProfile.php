<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * SeccompProfile defines a pod/container's seccomp profile settings. Only one
 * profile source may be set.
 */
class SeccompProfile extends AbstractModel
{
    /**
     * localhostProfile indicates a profile defined in a file on the node should be
     * used. The profile must be preconfigured on the node to work. Must be a
     * descending path, relative to the kubelet's configured seccomp profile location.
     * Must only be set if type is "Localhost".
     *
     * @var string
     */
    public $localhostProfile = null;

    /**
     * type indicates which kind of seccomp profile will be applied. Valid options are:
     *
     * Localhost - a profile defined in a file on the node should be used.
     * RuntimeDefault - the container runtime default profile should be used.
     * Unconfined - no profile should be applied.
     *
     *
     *
     * @var string
     */
    public $type = null;
}


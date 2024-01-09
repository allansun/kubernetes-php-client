<?php

namespace Kubernetes\Model\Io\K8s\Api\Storage\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * VolumeError captures an error encountered during a volume operation.
 */
class VolumeError extends AbstractModel
{
    /**
     * String detailing the error encountered during Attach or Detach operation. This
     * string may be logged, so it should not contain sensitive information.
     *
     * @var string
     */
    public $message = null;

    /**
     * Time the error was encountered.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $time = null;
}


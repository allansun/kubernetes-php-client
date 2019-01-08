<?php

namespace Kubernetes\Model\Io\K8s\Api\Storage\V1alpha1;

/**
 * VolumeError captures an error encountered during a volume operation.
 */
class VolumeError extends \Kubernetes\AbstractModel
{

    /**
     * String detailing the error encountered during Attach or Detach operation. This
     * string maybe logged, so it should not contain sensitive information.
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


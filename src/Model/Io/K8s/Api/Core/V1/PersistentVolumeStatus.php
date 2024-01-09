<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * PersistentVolumeStatus is the current status of a persistent volume.
 */
class PersistentVolumeStatus extends AbstractModel
{
    /**
     * message is a human-readable message indicating details about why the volume is
     * in this state.
     *
     * @var string
     */
    public $message = null;

    /**
     * phase indicates if a volume is available, bound to a claim, or released by a
     * claim. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#phase
     *
     *
     *
     * @var string
     */
    public $phase = null;

    /**
     * reason is a brief CamelCase string that describes any failure and is meant for
     * machine parsing and tidy display in the CLI.
     *
     * @var string
     */
    public $reason = null;
}


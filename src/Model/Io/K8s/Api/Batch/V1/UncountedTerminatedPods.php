<?php

namespace Kubernetes\Model\Io\K8s\Api\Batch\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * UncountedTerminatedPods holds UIDs of Pods that have terminated but haven't been
 * accounted in Job status counters.
 */
class UncountedTerminatedPods extends AbstractModel
{
    /**
     * Failed holds UIDs of failed Pods.
     *
     * @var string[]
     */
    public $failed = null;

    /**
     * Succeeded holds UIDs of succeeded Pods.
     *
     * @var string[]
     */
    public $succeeded = null;
}


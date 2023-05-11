<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1beta2;

use \KubernetesRuntime\AbstractModel;

/**
 * LimitResponse defines how to handle requests that can not be executed right now.
 */
class LimitResponse extends AbstractModel
{

    /**
     * `queuing` holds the configuration parameters for queuing. This field may be
     * non-empty only if `type` is `"Queue"`.
     *
     * @var QueuingConfiguration
     */
    public $queuing = null;

    /**
     * `type` is "Queue" or "Reject". "Queue" means that requests that can not be
     * executed upon arrival are held in a queue until they can be executed or a
     * queuing limit is reached. "Reject" means that requests that can not be executed
     * upon arrival are rejected. Required.
     *
     * @var string
     */
    public $type = null;


}


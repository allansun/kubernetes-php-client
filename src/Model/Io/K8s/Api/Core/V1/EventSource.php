<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * EventSource contains information for an event.
 */
class EventSource extends AbstractModel
{

    /**
     * Component from which the event is generated.
     *
     * @var string
     */
    public $component = null;

    /**
     * Node name on which the event is generated.
     *
     * @var string
     */
    public $host = null;


}


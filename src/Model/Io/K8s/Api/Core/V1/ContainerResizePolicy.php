<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ContainerResizePolicy represents resource resize policy for the container.
 */
class ContainerResizePolicy extends AbstractModel
{
    /**
     * Name of the resource to which this resource resize policy applies. Supported
     * values: cpu, memory.
     *
     * @var string
     */
    public $resourceName = null;

    /**
     * Restart policy to apply when specified resource is resized. If not specified, it
     * defaults to NotRequired.
     *
     * @var string
     */
    public $restartPolicy = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1beta3;

use \KubernetesRuntime\AbstractModel;

/**
 * FlowDistinguisherMethod specifies the method of a flow distinguisher.
 */
class FlowDistinguisherMethod extends AbstractModel
{
    /**
     * `type` is the type of flow distinguisher method The supported types are "ByUser"
     * and "ByNamespace". Required.
     *
     * @var string
     */
    public $type = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1;

/**
 * FlowDistinguisherMethod specifies the method of a flow distinguisher.
 */
class FlowDistinguisherMethod extends \KubernetesRuntime\AbstractModel
{

    /**
     * `type` is the type of flow distinguisher method The supported types are "ByUser"
     * and "ByNamespace". Required.
     *
     * @var string
     */
    public $type = null;


}


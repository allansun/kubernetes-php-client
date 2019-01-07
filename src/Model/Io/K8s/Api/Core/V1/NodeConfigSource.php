<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * NodeConfigSource specifies a source of node configuration. Exactly one subfield
 * (excluding metadata) must be non-nil.
 */
class NodeConfigSource extends \Kubernetes\AbstractModel
{

    /**
     * ConfigMap is a reference to a Node's ConfigMap
     *
     * @var ConfigMapNodeConfigSource
     */
    public $configMap = null;


}


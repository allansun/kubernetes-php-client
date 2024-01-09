<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * NamespaceStatus is information about the current status of a Namespace.
 */
class NamespaceStatus extends AbstractModel
{
    /**
     * Represents the latest available observations of a namespace's current state.
     *
     * @var NamespaceCondition[]
     */
    public $conditions = null;

    /**
     * Phase is the current lifecycle phase of the namespace. More info:
     * https://kubernetes.io/docs/tasks/administer-cluster/namespaces/
     *
     *
     *
     * @var string
     */
    public $phase = null;
}


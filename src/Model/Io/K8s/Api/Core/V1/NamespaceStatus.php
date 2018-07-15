<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * NamespaceStatus is information about the current status of a Namespace.
 */
class NamespaceStatus extends \Kubernetes\AbstractModel
{

    /**
     * Phase is the current lifecycle phase of the namespace. More info:
     * https://kubernetes.io/docs/tasks/administer-cluster/namespaces/
     *
     * @var string
     */
    public $phase = null;


}


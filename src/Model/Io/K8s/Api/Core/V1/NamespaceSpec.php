<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * NamespaceSpec describes the attributes on a Namespace.
 */
class NamespaceSpec extends \Kubernetes\AbstractModel
{

    /**
     * Finalizers is an opaque list of values that must be empty to permanently remove
     * object from storage. More info:
     * https://kubernetes.io/docs/tasks/administer-cluster/namespaces/
     *
     * @var string[]
     */
    public $finalizers = null;


}


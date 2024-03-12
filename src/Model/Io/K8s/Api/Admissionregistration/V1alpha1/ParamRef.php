<?php

namespace Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * ParamRef references a parameter resource
 */
class ParamRef extends AbstractModel
{
    /**
     * Name of the resource being referenced.
     *
     * @var string
     */
    public $name = null;

    /**
     * Namespace of the referenced resource. Should be empty for the cluster-scoped
     * resources
     *
     * @var string
     */
    public $namespace = null;
}


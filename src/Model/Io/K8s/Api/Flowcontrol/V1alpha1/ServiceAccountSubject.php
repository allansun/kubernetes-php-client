<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * ServiceAccountSubject holds detailed information for service-account-kind
 * subject.
 */
class ServiceAccountSubject extends AbstractModel
{

    /**
     * `name` is the name of matching ServiceAccount objects, or "*" to match
     * regardless of name. Required.
     *
     * @var string
     */
    public $name = null;

    /**
     * `namespace` is the namespace of matching ServiceAccount objects. Required.
     *
     * @var string
     */
    public $namespace = null;


}


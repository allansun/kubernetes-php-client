<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1;

/**
 * ServiceAccountSubject holds detailed information for service-account-kind
 * subject.
 */
class ServiceAccountSubject extends \KubernetesRuntime\AbstractModel
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


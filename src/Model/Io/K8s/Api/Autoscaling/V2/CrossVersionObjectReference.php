<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2;

use \KubernetesRuntime\AbstractModel;

/**
 * CrossVersionObjectReference contains enough information to let you identify the
 * referred resource.
 */
class CrossVersionObjectReference extends AbstractModel
{
    /**
     * API version of the referent
     *
     * @var string
     */
    public $apiVersion = null;

    /**
     * Kind of the referent; More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = null;

    /**
     * Name of the referent; More info:
     * http://kubernetes.io/docs/user-guide/identifiers#names
     *
     * @var string
     */
    public $name = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ResourceClaim references one entry in PodSpec.ResourceClaims.
 */
class ResourceClaim extends AbstractModel
{
    /**
     * Name must match the name of one entry in pod.spec.resourceClaims of the Pod
     * where this field is used. It makes that resource available inside a container.
     *
     * @var string
     */
    public $name = null;
}


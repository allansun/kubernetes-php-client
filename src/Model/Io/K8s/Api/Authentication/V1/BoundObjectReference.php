<?php

namespace Kubernetes\Model\Io\K8s\Api\Authentication\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * BoundObjectReference is a reference to an object that a token is bound to.
 */
class BoundObjectReference extends AbstractModel
{
    /**
     * API version of the referent.
     *
     * @var string
     */
    public $apiVersion = null;

    /**
     * Kind of the referent. Valid kinds are 'Pod' and 'Secret'.
     *
     * @var string
     */
    public $kind = null;

    /**
     * Name of the referent.
     *
     * @var string
     */
    public $name = null;

    /**
     * UID of the referent.
     *
     * @var string
     */
    public $uid = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Preconditions must be fulfilled before an operation (update, delete, etc.) is
 * carried out.
 */
class Preconditions extends AbstractModel
{
    /**
     * Specifies the target ResourceVersion
     *
     * @var string
     */
    public $resourceVersion = null;

    /**
     * Specifies the target UID.
     *
     * @var string
     */
    public $uid = null;
}


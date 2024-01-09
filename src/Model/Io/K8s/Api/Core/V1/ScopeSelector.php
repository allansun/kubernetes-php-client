<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * A scope selector represents the AND of the selectors represented by the
 * scoped-resource selector requirements.
 */
class ScopeSelector extends AbstractModel
{
    /**
     * A list of scope selector requirements by scope of the resources.
     *
     * @var ScopedResourceSelectorRequirement[]
     */
    public $matchExpressions = null;
}


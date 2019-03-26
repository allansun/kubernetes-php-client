<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * A scope selector represents the AND of the selectors represented by the
 * scoped-resource selector requirements.
 */
class ScopeSelector extends \KubernetesRuntime\AbstractModel
{

    /**
     * A list of scope selector requirements by scope of the resources.
     *
     * @var ScopedResourceSelectorRequirement[]
     */
    public $matchExpressions = null;

    protected $isRawObject = true;


}


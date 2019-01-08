<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * ResourceQuotaSpec defines the desired hard limits to enforce for Quota.
 */
class ResourceQuotaSpec extends \Kubernetes\AbstractModel
{

    /**
     * hard is the set of desired hard limits for each named resource. More info:
     * https://kubernetes.io/docs/concepts/policy/resource-quotas/
     *
     * @var object
     */
    public $hard = null;

    /**
     * scopeSelector is also a collection of filters like scopes that must match each
     * object tracked by a quota but expressed using ScopeSelectorOperator in
     * combination with possible values. For a resource to match, both scopes AND
     * scopeSelector (if specified in spec), must be matched.
     *
     * @var ScopeSelector
     */
    public $scopeSelector = null;

    /**
     * A collection of filters that must match each object tracked by a quota. If not
     * specified, the quota matches all objects.
     *
     * @var string[]
     */
    public $scopes = null;


}


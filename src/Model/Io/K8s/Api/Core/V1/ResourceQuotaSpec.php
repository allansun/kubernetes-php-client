<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * ResourceQuotaSpec defines the desired hard limits to enforce for Quota.
 */
class ResourceQuotaSpec extends \Kubernetes\AbstractModel
{

    /**
     * Hard is the set of desired hard limits for each named resource. More info:
     * https://kubernetes.io/docs/concepts/policy/resource-quotas/
     *
     * @var object
     */
    public $hard = null;

    /**
     * A collection of filters that must match each object tracked by a quota. If not
     * specified, the quota matches all objects.
     *
     * @var string[]
     */
    public $scopes = null;


}


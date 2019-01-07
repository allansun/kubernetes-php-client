<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * ResourceQuotaStatus defines the enforced hard limits and observed use.
 */
class ResourceQuotaStatus extends \Kubernetes\AbstractModel
{

    /**
     * Hard is the set of enforced hard limits for each named resource. More info:
     * https://kubernetes.io/docs/concepts/policy/resource-quotas/
     *
     * @var object
     */
    public $hard = null;

    /**
     * Used is the current observed total usage of the resource in the namespace.
     *
     * @var object
     */
    public $used = null;


}


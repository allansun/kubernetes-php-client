<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * LimitRangeSpec defines a min/max usage limit for resources that match on kind.
 */
class LimitRangeSpec extends AbstractModel
{
    /**
     * Limits is the list of LimitRangeItem objects that are enforced.
     *
     * @var LimitRangeItem[]
     */
    public $limits = null;
}


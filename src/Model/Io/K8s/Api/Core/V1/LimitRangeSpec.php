<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * LimitRangeSpec defines a min/max usage limit for resources that match on kind.
 */
class LimitRangeSpec extends \Kubernetes\AbstractModel
{

    /**
     * Limits is the list of LimitRangeItem objects that are enforced.
     *
     * @var LimitRangeItem[]
     */
    public $limits = null;


}


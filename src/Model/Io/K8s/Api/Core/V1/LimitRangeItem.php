<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * LimitRangeItem defines a min/max usage limit for any resource that matches on
 * kind.
 */
class LimitRangeItem extends \Kubernetes\AbstractModel
{

    /**
     * Default resource requirement limit value by resource name if resource limit is
     * omitted.
     *
     * @var object
     */
    public $default = null;

    /**
     * DefaultRequest is the default resource requirement request value by resource
     * name if resource request is omitted.
     *
     * @var object
     */
    public $defaultRequest = null;

    /**
     * Max usage constraints on this kind by resource name.
     *
     * @var object
     */
    public $max = null;

    /**
     * MaxLimitRequestRatio if specified, the named resource must have a request and
     * limit that are both non-zero where limit divided by request is less than or
     * equal to the enumerated value; this represents the max burst for the named
     * resource.
     *
     * @var object
     */
    public $maxLimitRequestRatio = null;

    /**
     * Min usage constraints on this kind by resource name.
     *
     * @var object
     */
    public $min = null;

    /**
     * Type of resource that this limit applies to.
     *
     * @var string
     */
    public $type = null;


}


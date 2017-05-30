<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Model;

/**
 * LimitRangeItem defines a min/max usage limit for any resource that matches on kind.
 *
 * @package Kubernetes\Model
 */
class LimitRangeItem extends AbstractModel
{
    /**
     * @var \StdClass
     * Default resource requirement limit value by resource name if resource limit is omitted.
     *
     */
    public $default;

    /**
     * @var \StdClass
     * DefaultRequest is the default resource requirement request value by resource name if resource request is omitted.
     */
    public $defaultRequest;

    /**
     * @var \StdClass
     * DefaultRequest is the default resource requirement request value by resource name if resource request is omitted.
     */
    public $max;

    /**
     * @var \StdClass
     * MaxLimitRequestRatio if specified, the named resource must have a request and limit that are both non-zero where
     * limit divided by request is less than or equal to the enumerated value; this represents the max burst for the
     * named resource.
     */
    public $maxLimitRequestRatio;

    /**
     * @var \StdClass
     * MaxLimitRequestRatio if specified, the named resource must have a request and limit that are both non-zero where
     * limit divided by request is less than or equal to the enumerated value; this represents the max burst for the
     * named resource.
     */
    public $min;

    /**
     * @var string
     * Type of resource that this limit applies to.
     */
    public $type;

}
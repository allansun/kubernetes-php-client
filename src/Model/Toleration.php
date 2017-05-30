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
 * The pod this Toleration is attached to tolerates any taint that matches the triple using the matching operator .
 *
 * @package Kubernetes\Model
 */
class Toleration extends AbstractModel
{

    /**
     * @var string
     * Effect indicates the taint effect to match. Empty means match all taint effects.
     * When specified, allowed values are NoSchedule, PreferNoSchedule and NoExecute.
     */
    public $effect;

    /**
     * @var string
     * Key is the taint key that the toleration applies to. Empty means match all taint keys.
     * If the key is empty, operator must be Exists; this combination means to match all values and all keys.
     */
    public $key;

    /**
     * @var string
     * Operator represents a key's relationship to the value. Valid operators are Exists and Equal. Defaults to Equal.
     * Exists is equivalent to wildcard for value, so that a pod can tolerate all taints of a particular category.
     */
    public $operator;

    /**
     * @var integer
     * TolerationSeconds represents the period of time the toleration (which must be of effect NoExecute,
     * otherwise this field is ignored) tolerates the taint.
     * By default, it is not set, which means tolerate the taint forever (do not evict).
     * Zero and negative values will be treated as 0 (evict immediately) by the system.
     */
    public $tolerationSeconds;

    /**
     * @var string
     * alue is the taint value the toleration matches to.
     * If the operator is Exists, the value should be empty, otherwise just a regular string.
     */
    public $value;
}
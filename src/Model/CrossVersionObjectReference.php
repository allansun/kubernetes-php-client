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
 * CrossVersionObjectReference contains enough information to let you identify the referred resource.
 *
 * @package Kubernetes\Model
 */
class CrossVersionObjectReference extends AbstractModel
{
    /**
     * @var string
     *
     * API version of the referent
     */
    public $apiVersion;

    /**
     * @var string
     *
     * Kind of the referent; More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var string
     *
     * Name of the referent; More info: http://kubernetes.io/docs/user-guide/identifiers#names
     */
    public $name;
}
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


class ScaleStatus extends AbstractModel
{
    /**
     * @var integer
     * actual number of observed instances of the scaled object.
     */
    public $replicas;

    /**
     * @var \StdClass
     * label query over pods that should match the replicas count. More info:
     * http://kubernetes.io/docs/user-guide/labels#label-selectors
     */
    public $selector;

    /**
     * @var string
     * label selector for pods that should match the replicas count. This is a serializated version of both map-based
     * and more expressive set-based selectors. This is done to avoid introspection in the clients. The string will be
     * in the same format as the query-param syntax. If the target type only supports map-based selectors, both this
     * field and map-based selector field are populated. More info:
     * http://kubernetes.io/docs/user-guide/labels#label-selectors
     */
    public $targetSelector;
}
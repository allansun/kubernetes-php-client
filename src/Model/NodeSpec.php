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


class NodeSpec extends AbstractModel
{
    /**
     * @var string
     * External ID of the node assigned by some machine database (e.g. a cloud provider). Deprecated.
     */
    public $externalID;

    /**
     * @var string
     * PodCIDR represents the pod IP range assigned to the node.
     */
    public $podCIDR;

    /**
     * @var string
     * ID of the node assigned by the cloud provider in the format: ://
     */
    public $providerID;

    /**
     * @var Taint[]
     * If specified, the node's taints.
     */
    public $taints;

    /**
     * @var boolean
     * Unschedulable controls node schedulability of new pods. By default, node is schedulable. More info:
     * http://releases.k8s.io/HEAD/docs/admin/node.md#manual-node-administration
     */
    public $unschedulable;

    /**
     * @param Taint[] $taints
     *
     * @return self
     */
    public function setTaints($taints)
    {
        $this->taints = $this->_createPropertyValue($taints, Taint::class, true);

        return $this;
    }

}
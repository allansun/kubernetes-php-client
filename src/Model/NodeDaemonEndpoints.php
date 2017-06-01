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


class NodeDaemonEndpoints extends AbstractModel
{
    /**
     * @var DaemonEndpoint
     * Endpoint on which Kubelet is listening.
     */
    public $kubeletEndpoint;

    /**
     * @param DaemonEndpoint $kubeletEndpoint
     *
     * @return self
     */
    public function setKubeletEndpoint($kubeletEndpoint)
    {
        $this->kubeletEndpoint = $this->_createPropertyValue($kubeletEndpoint, DaemonEndpoint::class, false);

        return $this;
    }

}
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
 * LoadBalancerStatus represents the status of a load-balancer.
 *
 * @package Kubernetes\Model
 */
class LoadBalancerStatus extends AbstractModel
{
    /**
     * @var LoadBalancerIngress[]
     * Ingress is a list containing ingress points for the load-balancer. Traffic intended for the service should be
     * sent to these ingress points.
     */
    public $ingress;

    /**
     * @param LoadBalancerIngress[] $ingress
     *
     * @return self
     */
    public function setIngress($ingress)
    {
        $this->ingress = $this->_createPropertyValue($ingress, LoadBalancerIngress::class, true);

        return $this;
    }

}
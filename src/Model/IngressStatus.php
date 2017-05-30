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


class IngressStatus extends AbstractModel
{

    /**
     * @var LoadBalancerStatus
     * LoadBalancer contains the current status of the load-balancer.
     */
    public $loadBalancer;

    /**
     * @param LoadBalancerStatus $loadBalancer
     *
     * @return self
     */
    public function setLoadBalancer($loadBalancer)
    {
        $this->loadBalancer = $this->_createPropertyValue($loadBalancer, LoadBalancerStatus::class, false);

        return $this;
    }

}
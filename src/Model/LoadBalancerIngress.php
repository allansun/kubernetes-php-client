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
 * LoadBalancerIngress represents the status of a load-balancer ingress point: traffic intended for the service should
 * be sent to an ingress point.
 *
 * @package Kubernetes\Model
 */
class LoadBalancerIngress extends AbstractModel
{
    /**
     * @var string
     * Hostname is set for load-balancer ingress points that are DNS based (typically AWS load-balancers)
     */
    public $hostname;

    /**
     * @var string
     * IP is set for load-balancer ingress points that are IP based (typically GCE or OpenStack load-balancers)
     */
    public $ip;
}
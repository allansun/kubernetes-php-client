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


class EndpointSubset extends AbstractModel
{
    /**
     * @var EndpointAddress[]
     * IP addresses which offer the related ports that are marked as ready. These endpoints should be considered safe
     * for load balancers and clients to utilize.
     */
    public $addresses;

    /**
     * @var EndpointAddress[]
     * IP addresses which offer the related ports but are not currently marked as ready because they have not yet
     * finished starting, have recently failed a readiness check, or have recently failed a liveness check.
     */
    public $notReadyAddresses;

    /**
     * @var EndpointPort[]
     * Port numbers available on the related IP addresses.
     */
    public $ports;

    /**
     * @param EndpointAddress[] $addresses
     *
     * @return self
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $this->_createPropertyValue($addresses, EndpointAddress::class, true);

        return $this;
    }

    /**
     * @param EndpointAddress[] $notReadyAddresses
     *
     * @return self
     */
    public function setNotReadyAddresses($notReadyAddresses)
    {
        $this->notReadyAddresses = $this->_createPropertyValue($notReadyAddresses, EndpointAddress::class, true);

        return $this;
    }

    /**
     * @param EndpointPort[] $ports
     *
     * @return self
     */
    public function setPorts($ports)
    {
        $this->ports = $this->_createPropertyValue($ports, EndpointPort::class, true);

        return $this;
    }

}
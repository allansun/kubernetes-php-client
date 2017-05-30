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


class ServerAddressByClientCIDR extends AbstractModel
{
    /**
     * @var string
     *
     * The CIDR with which clients can match their IP to figure out the server address that they should use.
     */
    public $clientCIDR;

    /**
     * @var string
     *
     * Address of this server, suitable for a client that matches the above CIDR.
     * This can be a hostname, hostname:port, IP or IP:port.
     */
    public $serverAddress;
}
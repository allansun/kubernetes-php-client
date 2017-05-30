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


class EndpointPort extends AbstractModel
{
    /**
     * @var string
     * The name of this port (corresponds to ServicePort.Name). Must be a DNS_LABEL. Optional only if one port is
     * defined.
     */
    public $name;

    /**
     * @var integer
     * The port number of the endpoint.
     */
    public $port;

    /**
     * @var string
     * The IP protocol for this port. Must be UDP or TCP. Default is TCP.
     */
    public $protocol = 'TCP';

}
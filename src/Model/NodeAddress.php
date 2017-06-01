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


class NodeAddress extends AbstractModel
{
    /**
     * @var string
     * The node address.
     */
    public $address;

    /**
     * @var string
     * Node address type, one of Hostname, ExternalIP or InternalIP.
     */
    public $type;

}
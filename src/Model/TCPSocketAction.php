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
 * TCPSocketAction describes an action based on opening a socket
 *
 * @package Kubernetes\Model
 */
class TCPSocketAction extends AbstractModel
{
    /**
     * @var integer|string
     * Number or name of the port to access on the container.
     * Number must be in the range 1 to 65535.
     * Name must be an IANA_SVC_NAME.
     */
    public $port;
}
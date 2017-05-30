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
 * ContainerPort represents a network port in a single container.
 *
 * @package Kubernetes\Model
 */
class ContainerPort extends AbstractModel
{
    /**
     * @var integer
     * Number of port to expose on the pod's IP address. This must be a valid port number, 0 < x < 65536.
     */
    public $containerPort;

    /**
     * @var string
     * What host IP to bind the external port to.
     */
    public $hostIP;

    /**
     * @var integer
     * Number of port to expose on the host. If specified, this must be a valid port number, 0 < x < 65536.
     * If HostNetwork is specified, this must match ContainerPort. Most containers do not need this.
     */
    public $hostPort;

    /**
     * @var string
     * If specified, this must be an IANA_SVC_NAME and unique within the pod.
     * Each named port in a pod must have a unique name.
     * Name for the port that can be referred to by services.
     */
    public $name;

    /**
     * @var string
     * Protocol for port. Must be UDP or TCP. Defaults to "TCP".
     */
    public $protocol = 'TCP';
}
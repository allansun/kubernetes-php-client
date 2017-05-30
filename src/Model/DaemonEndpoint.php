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
 * DaemonEndpoint contains information about a single Daemon endpoint.
 *
 * @package Kubernetes\Model
 */
class DaemonEndpoint extends AbstractModel
{

    /**
     * @var integer
     * Port number of the given endpoint.
     */
    public $Port;

}
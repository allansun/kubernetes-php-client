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


class NetworkPolicyPort extends AbstractModel
{
    /**
     * @var integer|string
     * If specified, the port on the given protocol. This can either be a numerical or named port on a pod. If this
     * field is not provided, this matches all port names and numbers. If present, only traffic on the specified
     * protocol AND port will be matched.
     */
    public $port;

    /**
     * @var string
     * Optional. The protocol (TCP or UDP) which traffic must match. If not specified, this field defaults to TCP.
     */
    public $protocol;

}
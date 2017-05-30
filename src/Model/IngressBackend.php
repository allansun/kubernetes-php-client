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


class IngressBackend extends AbstractModel
{
    /**
     * @var string
     * Specifies the name of the referenced service.
     */
    public $serviceName;

    /**
     * @var string
     * Specifies the port of the referenced service.
     */
    public $servicePort;

}
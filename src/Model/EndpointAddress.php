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


class EndpointAddress extends AbstractModel
{

    /**
     * @var string
     * The Hostname of this endpoint
     */
    public $hostname;

    /**
     * @var string
     * The IP of this endpoint. May not be loopback (127.0.0.0/8), link-local (169.254.0.0/16), or link-local multicast
     * ((224.0.0.0/24). IPv6 is also accepted but not fully supported on all platforms. Also, certain kubernetes
     * components, like kube-proxy, are not IPv6 ready.
     */
    public $ip;

    /**
     * @var string
     * Optional: Node hosting this endpoint. This can be used to determine endpoints local to a node.
     */
    public $nodeName;

    /**
     * @var ObjectReference
     * Reference to object providing the endpoint.
     */
    public $targetRef;

    /**
     * @param ObjectReference $targetRef
     *
     * @return self
     */
    public function setTargetRef($targetRef)
    {
        $this->targetRef = $this->_createPropertyValue($targetRef, ObjectReference::class, false);

        return $this;
    }

}
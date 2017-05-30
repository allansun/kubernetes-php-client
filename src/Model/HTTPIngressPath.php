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
 * HTTPIngressPath associates a path regex with a backend. Incoming urls matching the path are forwarded to the backend.
 *
 * @package Kubernetes\Model
 */
class HTTPIngressPath extends AbstractModel
{
    /**
     * @var IngressBackend
     * Backend defines the referenced service endpoint to which the traffic will be forwarded to.
     */
    public $backend;

    /**
     * @var string
     * Path is an extended POSIX regex as defined by IEEE Std 1003.1, (i.e this follows the egrep/unix syntax, not the
     * perl syntax) matched against the path of an incoming request. Currently it can contain characters disallowed
     * from the conventional "path" part of a URL as defined by RFC 3986. Paths must begin with a '/'. If unspecified,
     * the path defaults to a catch all sending traffic to the backend.
     */
    public $path;

    /**
     * @param IngressBackend $backend
     *
     * @return self
     */
    public function setBackend($backend)
    {
        $this->backend = $this->_createPropertyValue($backend, IngressBackend::class, false);

        return $this;
    }

}
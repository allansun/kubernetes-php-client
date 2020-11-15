<?php

namespace Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * HTTPIngressPath associates a path regex with a backend. Incoming urls matching
 * the path are forwarded to the backend.
 */
class HTTPIngressPath extends AbstractModel
{

    /**
     * Backend defines the referenced service endpoint to which the traffic will be
     * forwarded to.
     *
     * @var IngressBackend
     */
    public $backend = null;

    /**
     * Path is an extended POSIX regex as defined by IEEE Std 1003.1, (i.e this follows
     * the egrep/unix syntax, not the perl syntax) matched against the path of an
     * incoming request. Currently it can contain characters disallowed from the
     * conventional "path" part of a URL as defined by RFC 3986. Paths must begin with
     * a '/'. If unspecified, the path defaults to a catch all sending traffic to the
     * backend.
     *
     * @var string
     */
    public $path = null;


}


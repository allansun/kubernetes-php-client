<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * HTTPGetAction describes an action based on HTTP Get requests.
 */
class HTTPGetAction extends \Kubernetes\AbstractModel
{

    /**
     * Host name to connect to, defaults to the pod IP. You probably want to set "Host"
     * in httpHeaders instead.
     *
     * @var string
     */
    public $host = null;

    /**
     * Custom headers to set in the request. HTTP allows repeated headers.
     *
     * @var HTTPHeader[]
     */
    public $httpHeaders = null;

    /**
     * Path to access on the HTTP server.
     *
     * @var string
     */
    public $path = null;

    /**
     * Name or number of the port to access on the container. Number must be in the
     * range 1 to 65535. Name must be an IANA_SVC_NAME.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Util\Intstr\IntOrString
     */
    public $port = null;

    /**
     * Scheme to use for connecting to the host. Defaults to HTTP.
     *
     * @var string
     */
    public $scheme = null;


}


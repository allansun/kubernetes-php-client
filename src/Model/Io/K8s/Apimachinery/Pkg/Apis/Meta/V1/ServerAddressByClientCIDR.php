<?php

namespace Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1;

/**
 * ServerAddressByClientCIDR helps the client to determine the server address that
 * they should use, depending on the clientCIDR that they match.
 */
class ServerAddressByClientCIDR extends \Kubernetes\AbstractModel
{

    /**
     * The CIDR with which clients can match their IP to figure out the server address
     * that they should use.
     *
     * @var string
     */
    public $clientCIDR = null;

    /**
     * Address of this server, suitable for a client that matches the above CIDR. This
     * can be a hostname, hostname:port, IP or IP:port.
     *
     * @var string
     */
    public $serverAddress = null;


}


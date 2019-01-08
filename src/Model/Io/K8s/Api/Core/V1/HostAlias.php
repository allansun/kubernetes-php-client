<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * HostAlias holds the mapping between IP and hostnames that will be injected as an
 * entry in the pod's hosts file.
 */
class HostAlias extends \Kubernetes\AbstractModel
{

    /**
     * Hostnames for the above IP address.
     *
     * @var string[]
     */
    public $hostnames = null;

    /**
     * IP address of the host file entry.
     *
     * @var string
     */
    public $ip = null;


}


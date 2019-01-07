<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * PodDNSConfig defines the DNS parameters of a pod in addition to those generated
 * from DNSPolicy.
 */
class PodDNSConfig extends \Kubernetes\AbstractModel
{

    /**
     * A list of DNS name server IP addresses. This will be appended to the base
     * nameservers generated from DNSPolicy. Duplicated nameservers will be removed.
     *
     * @var string[]
     */
    public $nameservers = null;

    /**
     * A list of DNS resolver options. This will be merged with the base options
     * generated from DNSPolicy. Duplicated entries will be removed. Resolution options
     * given in Options will override those that appear in the base DNSPolicy.
     *
     * @var PodDNSConfigOption[]
     */
    public $options = null;

    /**
     * A list of DNS search domains for host-name lookup. This will be appended to the
     * base search paths generated from DNSPolicy. Duplicated search paths will be
     * removed.
     *
     * @var string[]
     */
    public $searches = null;


}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1;

/**
 * IngressTLS describes the transport layer security associated with an Ingress.
 */
class IngressTLS extends \Kubernetes\AbstractModel
{

    /**
     * Hosts are a list of hosts included in the TLS certificate. The values in this
     * list must match the name/s used in the tlsSecret. Defaults to the wildcard host
     * setting for the loadbalancer controller fulfilling this Ingress, if left
     * unspecified.
     *
     * @var string[]
     */
    public $hosts = null;

    /**
     * SecretName is the name of the secret used to terminate SSL traffic on 443. Field
     * is left optional to allow SSL routing based on SNI hostname alone. If the SNI
     * host in a listener conflicts with the "Host" header field used by an
     * IngressRule, the SNI host is used for termination and value of the Host header
     * is used for routing.
     *
     * @var string
     */
    public $secretName = null;


}


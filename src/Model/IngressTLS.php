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
 * IngressTLS describes the transport layer security associated with an Ingress.
 *
 * @package Kubernetes\Model
 */
class IngressTLS extends AbstractModel
{

    /**
     * @var string[]
     * Hosts are a list of hosts included in the TLS certificate. The values in this list must match the name/s used in
     * the tlsSecret. Defaults to the wildcard host setting for the loadbalancer controller fulfilling this Ingress, if
     * left unspecified.
     */
    public $hosts;

    /**
     * @var string
     * SecretName is the name of the secret used to terminate SSL traffic on 443. Field is left optional to allow SSL
     * routing based on SNI hostname alone. If the SNI host in a listener conflicts with the "Host" header field used
     * by an IngressRule, the SNI host is used for termination and value of the Host header is used for routing.
     */
    public $secretName;
}
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


class IngressSpec extends AbstractModel
{
    /**
     * @var IngressBackend
     * A default backend capable of servicing requests that don't match any rule. At least one of 'backend' or 'rules'
     * must be specified. This field is optional to allow the loadbalancer controller or defaulting logic to specify a
     * global default.
     */
    public $backend;

    /**
     * @var IngressRule[]
     * A list of host rules used to configure the Ingress. If unspecified, or no rule matches, all traffic is sent to
     * the default backend.
     */
    public $rules;

    /**
     * @var IngressTLS[]
     * TLS configuration. Currently the Ingress only supports a single TLS port, 443. If multiple members of this list
     * specify different hosts, they will be multiplexed on the same port according to the hostname specified through
     * the SNI TLS extension, if the ingress controller fulfilling the ingress supports SNI.
     */
    public $tls;

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

    /**
     * @param IngressRule[] $rules
     *
     * @return self
     */
    public function setRules($rules)
    {
        $this->rules = $this->_createPropertyValue($rules, IngressRule::class, true);

        return $this;
    }

    /**
     * @param IngressTLS[] $tls
     *
     * @return self
     */
    public function setTls($tls)
    {
        $this->tls = $this->_createPropertyValue($tls, IngressTLS::class, true);

        return $this;
    }

}
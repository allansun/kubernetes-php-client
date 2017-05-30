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


class IngressRule extends AbstractModel
{
    /**
     * @var string
     * Host is the fully qualified domain name of a network host, as defined by RFC 3986. Note the following deviations
     * from the "host" part of the URI as defined in the RFC: 1. IPs are not allowed. Currently an IngressRuleValue can
     * only apply to the IP in the Spec of the parent Ingress. 2. The : delimiter is not respected because ports are
     * not allowed. Currently the port of an Ingress is implicitly :80 for http and :443 for https. Both these may
     * change in the future. Incoming requests are matched against the host before the IngressRuleValue. If the host is
     * unspecified, the Ingress routes all traffic based on the specified IngressRuleValue.
     */
    public $host;

    /**
     * @var HTTPIngressRuleValue
     */
    public $http;

    /**
     * @param HTTPIngressRuleValue $http
     *
     * @return self
     */
    public function setHttp($http)
    {
        $this->http = $this->_createPropertyValue($http, HTTPIngressRuleValue::class, false);

        return $this;
    }

}
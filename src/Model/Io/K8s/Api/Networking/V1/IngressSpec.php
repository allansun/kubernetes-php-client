<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1;

/**
 * IngressSpec describes the Ingress the user wishes to exist.
 */
class IngressSpec extends \KubernetesRuntime\AbstractModel
{

    /**
     * DefaultBackend is the backend that should handle requests that don't match any
     * rule. If Rules are not specified, DefaultBackend must be specified. If
     * DefaultBackend is not set, the handling of requests that do not match any of the
     * rules will be up to the Ingress controller.
     *
     * @var IngressBackend
     */
    public $defaultBackend = null;

    /**
     * IngressClassName is the name of the IngressClass cluster resource. The
     * associated IngressClass defines which controller will implement the resource.
     * This replaces the deprecated `kubernetes.io/ingress.class` annotation. For
     * backwards compatibility, when that annotation is set, it must be given
     * precedence over this field. The controller may emit a warning if the field and
     * annotation have different values. Implementations of this API should ignore
     * Ingresses without a class specified. An IngressClass resource may be marked as
     * default, which can be used to set a default value for this field. For more
     * information, refer to the IngressClass documentation.
     *
     * @var string
     */
    public $ingressClassName = null;

    /**
     * A list of host rules used to configure the Ingress. If unspecified, or no rule
     * matches, all traffic is sent to the default backend.
     *
     * @var IngressRule[]
     */
    public $rules = null;

    /**
     * TLS configuration. Currently the Ingress only supports a single TLS port, 443.
     * If multiple members of this list specify different hosts, they will be
     * multiplexed on the same port according to the hostname specified through the SNI
     * TLS extension, if the ingress controller fulfilling the ingress supports SNI.
     *
     * @var IngressTLS[]
     */
    public $tls = null;


}


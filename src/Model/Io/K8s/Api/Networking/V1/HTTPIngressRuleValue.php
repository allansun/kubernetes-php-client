<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * HTTPIngressRuleValue is a list of http selectors pointing to backends. In the
 * example: http://<host>/<path>?<searchpart> -> backend where where parts of the
 * url correspond to RFC 3986, this resource will be used to match against
 * everything after the last '/' and before the first '?' or '#'.
 */
class HTTPIngressRuleValue extends AbstractModel
{
    /**
     * A collection of paths that map requests to backends.
     *
     * @var HTTPIngressPath[]
     */
    public $paths = null;
}


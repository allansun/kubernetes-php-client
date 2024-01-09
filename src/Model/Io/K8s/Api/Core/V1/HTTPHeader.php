<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * HTTPHeader describes a custom header to be used in HTTP probes
 */
class HTTPHeader extends AbstractModel
{
    /**
     * The header field name. This will be canonicalized upon output, so case-variant
     * names will be understood as the same header.
     *
     * @var string
     */
    public $name = null;

    /**
     * The header field value
     *
     * @var string
     */
    public $value = null;
}


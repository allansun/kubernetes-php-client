<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * HTTPHeader describes a custom header to be used in HTTP probes
 */
class HTTPHeader extends AbstractModel
{

    /**
     * The header field name
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


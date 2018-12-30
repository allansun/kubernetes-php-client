<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * SessionAffinityConfig represents the configurations of session affinity.
 */
class SessionAffinityConfig extends \Kubernetes\AbstractModel
{

    /**
     * clientIP contains the configurations of Client IP based session affinity.
     *
     * @var ClientIPConfig
     */
    public $clientIP = null;


}


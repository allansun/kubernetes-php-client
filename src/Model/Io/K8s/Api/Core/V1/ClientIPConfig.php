<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * ClientIPConfig represents the configurations of Client IP based session
 * affinity.
 */
class ClientIPConfig extends \Kubernetes\AbstractModel
{

    /**
     * timeoutSeconds specifies the seconds of ClientIP type session sticky time. The
     * value must be >0 && <=86400(for 1 day) if ServiceAffinity == "ClientIP". Default
     * value is 10800(for 3 hours).
     *
     * @var integer
     */
    public $timeoutSeconds = null;


}


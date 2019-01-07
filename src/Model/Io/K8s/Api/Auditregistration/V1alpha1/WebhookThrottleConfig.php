<?php

namespace Kubernetes\Model\Io\K8s\Api\Auditregistration\V1alpha1;

/**
 * WebhookThrottleConfig holds the configuration for throttling events
 */
class WebhookThrottleConfig extends \Kubernetes\AbstractModel
{

    /**
     * ThrottleBurst is the maximum number of events sent at the same moment default 15
     * QPS
     *
     * @var integer
     */
    public $burst = null;

    /**
     * ThrottleQPS maximum number of batches per second default 10 QPS
     *
     * @var integer
     */
    public $qps = null;


}


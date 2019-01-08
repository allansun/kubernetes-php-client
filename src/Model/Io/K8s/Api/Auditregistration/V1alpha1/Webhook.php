<?php

namespace Kubernetes\Model\Io\K8s\Api\Auditregistration\V1alpha1;

/**
 * Webhook holds the configuration of the webhook
 */
class Webhook extends \Kubernetes\AbstractModel
{

    /**
     * ClientConfig holds the connection parameters for the webhook required
     *
     * @var WebhookClientConfig
     */
    public $clientConfig = null;

    /**
     * Throttle holds the options for throttling the webhook
     *
     * @var WebhookThrottleConfig
     */
    public $throttle = null;


}


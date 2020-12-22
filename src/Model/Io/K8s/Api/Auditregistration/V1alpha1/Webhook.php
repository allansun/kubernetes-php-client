<?php

namespace Kubernetes\Model\Io\K8s\Api\Auditregistration\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * Webhook holds the configuration of the webhook
 */
class Webhook extends AbstractModel
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


<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

/**
 * CustomResourceConversion describes how to convert different versions of a CR.
 */
class CustomResourceConversion extends \Kubernetes\AbstractModel
{

    /**
     * `strategy` specifies the conversion strategy. Allowed values are: - `None`: The
     * converter only change the apiVersion and would not touch any other field in the
     * CR. - `Webhook`: API Server will call to an external webhook to do the
     * conversion. Additional information is needed for this option.
     *
     * @var string
     */
    public $strategy = null;

    /**
     * `webhookClientConfig` is the instructions for how to call the webhook if
     * strategy is `Webhook`. This field is alpha-level and is only honored by servers
     * that enable the CustomResourceWebhookConversion feature.
     *
     * @var WebhookClientConfig
     */
    public $webhookClientConfig = null;


}


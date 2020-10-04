<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * CustomResourceConversion describes how to convert different versions of a CR.
 */
class CustomResourceConversion extends AbstractModel
{

    /**
     * ConversionReviewVersions is an ordered list of preferred `ConversionReview`
     * versions the Webhook expects. API server will try to use first version in the
     * list which it supports. If none of the versions specified in this list supported
     * by API server, conversion will fail for this object. If a persisted Webhook
     * configuration specifies allowed versions and does not include any versions known
     * to the API Server, calls to the webhook will fail. Default to `['v1beta1']`.
     *
     * @var string[]
     */
    public $conversionReviewVersions = null;

    /**
     * `strategy` specifies the conversion strategy. Allowed values are: - `None`: The
     * converter only change the apiVersion and would not touch any other field in the
     * CR. - `Webhook`: API Server will call to an external webhook to do the
     * conversion. Additional information
     *   is needed for this option. This requires spec.preserveUnknownFields to be
     * false.
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


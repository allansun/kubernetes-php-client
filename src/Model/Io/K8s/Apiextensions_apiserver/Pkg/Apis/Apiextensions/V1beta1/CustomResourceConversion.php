<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

/**
 * CustomResourceConversion describes how to convert different versions of a CR.
 */
class CustomResourceConversion extends \KubernetesRuntime\AbstractModel
{

    /**
     * conversionReviewVersions is an ordered list of preferred `ConversionReview`
     * versions the Webhook expects. The API server will use the first version in the
     * list which it supports. If none of the versions specified in this list are
     * supported by API server, conversion will fail for the custom resource. If a
     * persisted Webhook configuration specifies allowed versions and does not include
     * any versions known to the API Server, calls to the webhook will fail. Defaults
     * to `["v1beta1"]`.
     *
     * @var string[]
     */
    public $conversionReviewVersions = null;

    /**
     * strategy specifies how custom resources are converted between versions. Allowed
     * values are: - `None`: The converter only change the apiVersion and would not
     * touch any other field in the custom resource. - `Webhook`: API Server will call
     * to an external webhook to do the conversion. Additional information
     *   is needed for this option. This requires spec.preserveUnknownFields to be
     * false, and spec.conversion.webhookClientConfig to be set.
     *
     * @var string
     */
    public $strategy = null;

    /**
     * webhookClientConfig is the instructions for how to call the webhook if strategy
     * is `Webhook`. Required when `strategy` is set to `Webhook`.
     *
     * @var WebhookClientConfig
     */
    public $webhookClientConfig = null;


}


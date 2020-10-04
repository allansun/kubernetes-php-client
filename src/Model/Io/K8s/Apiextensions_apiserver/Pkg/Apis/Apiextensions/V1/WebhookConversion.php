<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * WebhookConversion describes how to call a conversion webhook
 */
class WebhookConversion extends AbstractModel
{

    /**
     * clientConfig is the instructions for how to call the webhook if strategy is
     * `Webhook`.
     *
     * @var WebhookClientConfig
     */
    public $clientConfig = null;

    /**
     * conversionReviewVersions is an ordered list of preferred `ConversionReview`
     * versions the Webhook expects. The API server will use the first version in the
     * list which it supports. If none of the versions specified in this list are
     * supported by API server, conversion will fail for the custom resource. If a
     * persisted Webhook configuration specifies allowed versions and does not include
     * any versions known to the API Server, calls to the webhook will fail.
     *
     * @var string[]
     */
    public $conversionReviewVersions = null;


}


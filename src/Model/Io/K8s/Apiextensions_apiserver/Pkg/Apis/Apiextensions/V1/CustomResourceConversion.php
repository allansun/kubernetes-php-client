<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1;

/**
 * CustomResourceConversion describes how to convert different versions of a CR.
 */
class CustomResourceConversion extends \KubernetesRuntime\AbstractModel
{

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
     * webhook describes how to call the conversion webhook. Required when strategy is
     * "Webhook".
     *
     * @var WebhookConversion
     */
    public $webhook = null;


}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ValidatingWebhookConfiguration describes the configuration of and admission
 * webhook that accept or reject and object without changing it.
 */
class ValidatingWebhookConfiguration extends AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'admissionregistration.k8s.io/v1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'ValidatingWebhookConfiguration';

    /**
     * Standard object metadata; More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Webhooks is a list of webhooks and the affected resources and operations.
     *
     * @var ValidatingWebhook[]
     */
    public $webhooks = null;


}


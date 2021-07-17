<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2beta2;

use \KubernetesRuntime\AbstractModel;

/**
 * HorizontalPodAutoscaler is the configuration for a horizontal pod autoscaler,
 * which automatically manages the replica count of any resource implementing the
 * scale subresource based on the metrics specified.
 */
class HorizontalPodAutoscaler extends AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'autoscaling/v2beta2';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'HorizontalPodAutoscaler';

    /**
     * metadata is the standard object metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * spec is the specification for the behaviour of the autoscaler. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status.
     *
     * @var HorizontalPodAutoscalerSpec
     */
    public $spec = null;

    /**
     * status is the current information about the autoscaler.
     *
     * @var HorizontalPodAutoscalerStatus
     */
    public $status = null;


}


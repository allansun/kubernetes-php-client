<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1beta2;

use \KubernetesRuntime\AbstractModel;

/**
 * PriorityLevelConfiguration represents the configuration of a priority level.
 */
class PriorityLevelConfiguration extends AbstractModel
{
    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'flowcontrol.apiserver.k8s.io/v1beta2';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'PriorityLevelConfiguration';

    /**
     * `metadata` is the standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * `spec` is the specification of the desired behavior of a "request-priority".
     * More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status
     *
     * @var PriorityLevelConfigurationSpec
     */
    public $spec = null;

    /**
     * `status` is the current status of a "request-priority". More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status
     *
     * @var PriorityLevelConfigurationStatus
     */
    public $status = null;
}


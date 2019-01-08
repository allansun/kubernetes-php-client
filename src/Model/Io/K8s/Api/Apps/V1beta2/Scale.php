<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1beta2;

/**
 * Scale represents a scaling request for a resource.
 */
class Scale extends \Kubernetes\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'apps/v1beta2';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'Scale';

    /**
     * Standard object metadata; More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * defines the behavior of the scale. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status.
     *
     * @var ScaleSpec
     */
    public $spec = null;

    /**
     * current status of the scale. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status.
     * Read-only.
     *
     * @var ScaleStatus
     */
    public $status = null;


}


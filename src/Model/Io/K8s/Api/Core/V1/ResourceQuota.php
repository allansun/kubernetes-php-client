<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * ResourceQuota sets aggregate quota restrictions enforced per namespace
 */
class ResourceQuota extends \Kubernetes\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'v1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'ResourceQuota';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Spec defines the desired quota.
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     *
     * @var ResourceQuotaSpec
     */
    public $spec = null;

    /**
     * Status defines the actual enforced quota and its current usage.
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     *
     * @var ResourceQuotaStatus
     */
    public $status = null;


}


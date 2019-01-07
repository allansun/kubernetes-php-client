<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Pod is a collection of containers that can run on a host. This resource is
 * created by clients and scheduled onto hosts.
 */
class Pod extends \Kubernetes\AbstractModel
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
    public $kind = 'Pod';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Specification of the desired behavior of the pod. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     *
     * @var PodSpec
     */
    public $spec = null;

    /**
     * Most recently observed status of the pod. This data may not be up to date.
     * Populated by the system. Read-only. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     *
     * @var PodStatus
     */
    public $status = null;


}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1beta2;

/**
 * DEPRECATED - This group version of ReplicaSet is deprecated by
 * apps/v1/ReplicaSet. See the release notes for more information. ReplicaSet
 * ensures that a specified number of pod replicas are running at any given time.
 *
 * @deprecated
 */
class ReplicaSet extends \Kubernetes\AbstractModel
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
    public $kind = 'ReplicaSet';

    /**
     * If the Labels of a ReplicaSet are empty, they are defaulted to be the same as
     * the Pod(s) that the ReplicaSet manages. Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Spec defines the specification of the desired behavior of the ReplicaSet. More
     * info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     *
     * @var ReplicaSetSpec
     */
    public $spec = null;

    /**
     * Status is the most recently observed status of the ReplicaSet. This data may be
     * out of date by some window of time. Populated by the system. Read-only. More
     * info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     *
     * @var ReplicaSetStatus
     */
    public $status = null;


}


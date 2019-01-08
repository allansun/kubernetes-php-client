<?php

namespace Kubernetes\Model\Io\K8s\Api\Policy\V1beta1;

/**
 * Eviction evicts a pod from its node subject to certain policies and safety
 * constraints. This is a subresource of Pod.  A request to cause such an eviction
 * is created by POSTing to .../pods/<pod name>/evictions.
 */
class Eviction extends \Kubernetes\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'policy/v1beta1';

    /**
     * DeleteOptions may be provided
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions
     */
    public $deleteOptions = null;

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'Eviction';

    /**
     * ObjectMeta describes the pod that is being evicted.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;


}


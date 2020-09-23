<?php

namespace Kubernetes\Model\Io\K8s\Api\Apiserverinternal\V1alpha1;

/**
 * Storage version of a specific resource.
 */
class StorageVersion extends \KubernetesRuntime\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'internal.apiserver.k8s.io/v1alpha1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'StorageVersion';

    /**
     * The name is <group>.<resource>.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Spec is an empty spec. It is here to comply with Kubernetes API style.
     *
     * @var StorageVersionSpec
     */
    public $spec = null;

    /**
     * API server instances report the version they can decode and the version they
     * encode objects to when persisting objects in the backend.
     *
     * @var StorageVersionStatus
     */
    public $status = null;


}


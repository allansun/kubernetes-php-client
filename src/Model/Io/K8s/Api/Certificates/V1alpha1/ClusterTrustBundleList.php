<?php

namespace Kubernetes\Model\Io\K8s\Api\Certificates\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * ClusterTrustBundleList is a collection of ClusterTrustBundle objects
 */
class ClusterTrustBundleList extends AbstractModel
{
    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'certificates.k8s.io/v1alpha1';

    /**
     * items is a collection of ClusterTrustBundle objects
     *
     * @var ClusterTrustBundle[]
     */
    public $items = null;

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'ClusterTrustBundleList';

    /**
     * metadata contains the list metadata.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ListMeta
     */
    public $metadata = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * NamespaceList is a list of Namespaces.
 */
class NamespaceList extends \Kubernetes\AbstractModel
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
     * Items is the list of Namespace objects in the list. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/namespaces/
     *
     * @var KubernetesNamespace[]
     */
    public $items = null;

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'NamespaceList';

    /**
     * Standard list metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ListMeta
     */
    public $metadata = null;


}


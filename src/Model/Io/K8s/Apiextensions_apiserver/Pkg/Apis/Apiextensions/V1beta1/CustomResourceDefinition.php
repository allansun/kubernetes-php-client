<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * CustomResourceDefinition represents a resource that should be exposed on the API
 * server.  Its name MUST be in the format <.spec.name>.<.spec.group>. Deprecated
 * in v1.16, planned for removal in v1.22. Use apiextensions.k8s.io/v1
 * CustomResourceDefinition instead.
 */
class CustomResourceDefinition extends AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'apiextensions.k8s.io/v1beta1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'CustomResourceDefinition';

    /**
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * spec describes how the user wants the resources to appear
     *
     * @var CustomResourceDefinitionSpec
     */
    public $spec = null;

    /**
     * status indicates the actual state of the CustomResourceDefinition
     *
     * @var CustomResourceDefinitionStatus
     */
    public $status = null;


}


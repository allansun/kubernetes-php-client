<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * FlowSchemaList is a list of FlowSchema objects.
 */
class FlowSchemaList extends AbstractModel
{
    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'flowcontrol.apiserver.k8s.io/v1';

    /**
     * `items` is a list of FlowSchemas.
     *
     * @var FlowSchema[]
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
    public $kind = 'FlowSchemaList';

    /**
     * `metadata` is the standard list metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ListMeta
     */
    public $metadata = null;
}

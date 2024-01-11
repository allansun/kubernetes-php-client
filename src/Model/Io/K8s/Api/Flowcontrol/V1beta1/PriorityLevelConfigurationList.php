<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * PriorityLevelConfigurationList is a list of PriorityLevelConfiguration objects.
 */
class PriorityLevelConfigurationList extends AbstractModel
{
    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'flowcontrol.apiserver.k8s.io/v1beta1';

    /**
     * `items` is a list of request-priorities.
     *
     * @var PriorityLevelConfiguration[]
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
    public $kind = 'PriorityLevelConfigurationList';

    /**
     * `metadata` is the standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ListMeta
     */
    public $metadata = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1;

/**
 * FlowSchema defines the schema of a group of flows. Note that a flow is made up
 * of a set of inbound API requests with similar attributes and is identified by a
 * pair of strings: the name of the FlowSchema and a "flow distinguisher".
 */
class FlowSchema extends \KubernetesRuntime\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'flowcontrol.apiserver.k8s.io/v1alpha1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'FlowSchema';

    /**
     * `metadata` is the standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * `spec` is the specification of the desired behavior of a FlowSchema. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status
     *
     * @var FlowSchemaSpec
     */
    public $spec = null;

    /**
     * `status` is the current status of a FlowSchema. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status
     *
     * @var FlowSchemaStatus
     */
    public $status = null;


}


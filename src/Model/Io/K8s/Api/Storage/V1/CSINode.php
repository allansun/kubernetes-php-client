<?php

namespace Kubernetes\Model\Io\K8s\Api\Storage\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * CSINode holds information about all CSI drivers installed on a node. CSI drivers
 * do not need to create the CSINode object directly. As long as they use the
 * node-driver-registrar sidecar container, the kubelet will automatically populate
 * the CSINode object for the CSI driver as part of kubelet plugin registration.
 * CSINode has the same name as a node. If the object is missing, it means either
 * there are no CSI Drivers available on the node, or the Kubelet version is low
 * enough that it doesn't create this object. CSINode has an OwnerReference that
 * points to the corresponding node object.
 */
class CSINode extends AbstractModel
{
    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'storage.k8s.io/v1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'CSINode';

    /**
     * metadata.name must be the Kubernetes node name.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * spec is the specification of CSINode
     *
     * @var CSINodeSpec
     */
    public $spec = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Storage\V1;

/**
 * VolumeAttachment captures the intent to attach or detach the specified volume
 * to/from the specified node.
 *
 * VolumeAttachment objects are non-namespaced.
 */
class VolumeAttachment extends \Kubernetes\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'storage.k8s.io/v1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'VolumeAttachment';

    /**
     * Standard object metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Specification of the desired attach/detach volume behavior. Populated by the
     * Kubernetes system.
     *
     * @var VolumeAttachmentSpec
     */
    public $spec = null;

    /**
     * Status of the VolumeAttachment request. Populated by the entity completing the
     * attach or detach operation, i.e. the external-attacher.
     *
     * @var VolumeAttachmentStatus
     */
    public $status = null;


}


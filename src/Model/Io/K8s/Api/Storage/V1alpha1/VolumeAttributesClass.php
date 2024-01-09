<?php

namespace Kubernetes\Model\Io\K8s\Api\Storage\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * VolumeAttributesClass represents a specification of mutable volume attributes
 * defined by the CSI driver. The class can be specified during dynamic
 * provisioning of PersistentVolumeClaims, and changed in the PersistentVolumeClaim
 * spec after provisioning.
 */
class VolumeAttributesClass extends AbstractModel
{
    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'storage.k8s.io/v1alpha1';

    /**
     * Name of the CSI driver This field is immutable.
     *
     * @var string
     */
    public $driverName = null;

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'VolumeAttributesClass';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * parameters hold volume attributes defined by the CSI driver. These values are
     * opaque to the Kubernetes and are passed directly to the CSI driver. The
     * underlying storage provider supports changing these attributes on an existing
     * volume, however the parameters field itself is immutable. To invoke a volume
     * update, a new VolumeAttributesClass should be created with new parameters, and
     * the PersistentVolumeClaim should be updated to reference the new
     * VolumeAttributesClass.
     *
     * This field is required and must contain at least one key/value pair. The keys
     * cannot be empty, and the maximum number of parameters is 512, with a cumulative
     * max size of 256K. If the CSI driver rejects invalid parameters, the target
     * PersistentVolumeClaim will be set to an "Infeasible" state in the
     * modifyVolumeStatus field.
     *
     * @var object
     */
    public $parameters = null;
}


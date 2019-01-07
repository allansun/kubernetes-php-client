<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1beta1;

/**
 * DEPRECATED - This group version of ControllerRevision is deprecated by
 * apps/v1beta2/ControllerRevision. See the release notes for more information.
 * ControllerRevision implements an immutable snapshot of state data. Clients are
 * responsible for serializing and deserializing the objects that contain their
 * internal state. Once a ControllerRevision has been successfully created, it can
 * not be updated. The API Server will fail validation of all requests that attempt
 * to mutate the Data field. ControllerRevisions may, however, be deleted. Note
 * that, due to its use by both the DaemonSet and StatefulSet controllers for
 * update and rollback, this object is beta. However, it may be subject to name and
 * representation changes in future releases, and clients should not depend on its
 * stability. It is primarily for internal use by controllers.
 *
 * @deprecated
 */
class ControllerRevision extends \Kubernetes\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'apps/v1beta1';

    /**
     * Data is the serialized representation of the state.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Runtime\RawExtension
     */
    public $data = null;

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'ControllerRevision';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Revision indicates the revision of the state represented by Data.
     *
     * @var integer
     */
    public $revision = null;


}


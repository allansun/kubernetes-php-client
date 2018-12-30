<?php

namespace Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1;

/**
 * Status is a return value for calls that don't return other objects.
 */
class Status extends \Kubernetes\AbstractModel
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
     * Suggested HTTP return code for this status, 0 if not set.
     *
     * @var integer
     */
    public $code = null;

    /**
     * Extended data associated with the reason.  Each reason may define its own
     * extended details. This field is optional and the data returned is not guaranteed
     * to conform to any schema except that defined by the reason type.
     *
     * @var StatusDetails
     */
    public $details = null;

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'Status';

    /**
     * A human-readable description of the status of this operation.
     *
     * @var string
     */
    public $message = null;

    /**
     * Standard list metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var ListMeta
     */
    public $metadata = null;

    /**
     * A machine-readable description of why this operation is in the "Failure" status.
     * If this value is empty there is no information available. A Reason clarifies an
     * HTTP status code but does not override it.
     *
     * @var string
     */
    public $reason = null;

    /**
     * Status of the operation. One of: "Success" or "Failure". More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     *
     * @var string
     */
    public $status = null;


}


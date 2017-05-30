<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Model;


class Status extends AbstractModel
{
    /**
     * @var string
     *
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var integer
     *
     * Suggested HTTP return code for this status, 0 if not set.
     */
    public $code;

    /**
     * @var StatusDetails
     * Extended data associated with the reason. Each reason may define its own extended details. This field is
     * optional and the data returned is not guaranteed to conform to any schema except that defined by the reason
     * type.
     */
    public $details;

    /**
     * @var string
     *
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to.
     * Cannot be updated. In CamelCase.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var string
     * A human-readable description of the status of this operation.
     */
    public $message;

    /**
     * @var ListMeta
     *
     * Standard list metadata. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     */
    public $metadata;

    /**
     * @var string
     * A machine-readable description of why this operation is in the "Failure" status. If this value is empty there is
     * no information available. A Reason clarifies an HTTP status code but does not override it.
     */
    public $reason;

    /**
     * @var string
     *
     * Status of the operation. One of: "Success" or "Failure". More info:
     * http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#spec-and-status
     */
    public $status;

    /**
     * @param StatusDetails $details
     *
     * @return self
     */
    public function setDetails($details)
    {
        $this->details = $this->_createPropertyValue($details, StatusDetails::class, false);

        return $this;
    }

    /**
     * @param ListMeta $metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $this->_createPropertyValue($metadata, ListMeta::class, false);

        return $this;
    }

}
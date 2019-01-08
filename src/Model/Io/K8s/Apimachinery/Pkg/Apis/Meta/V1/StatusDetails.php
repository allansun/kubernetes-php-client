<?php

namespace Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1;

/**
 * StatusDetails is a set of additional properties that MAY be set by the server to
 * provide additional information about a response. The Reason field of a Status
 * object defines what attributes will be set. Clients must ignore fields that do
 * not match the defined type of each attribute, and should assume that any
 * attribute may be empty, invalid, or under defined.
 */
class StatusDetails extends \Kubernetes\AbstractModel
{

    /**
     * The Causes array includes more details associated with the StatusReason failure.
     * Not all StatusReasons may provide detailed causes.
     *
     * @var StatusCause[]
     */
    public $causes = null;

    /**
     * The group attribute of the resource associated with the status StatusReason.
     *
     * @var string
     */
    public $group = null;

    /**
     * The kind attribute of the resource associated with the status StatusReason. On
     * some operations may differ from the requested resource Kind. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = null;

    /**
     * The name attribute of the resource associated with the status StatusReason (when
     * there is a single name which can be described).
     *
     * @var string
     */
    public $name = null;

    /**
     * If specified, the time in seconds before the operation should be retried. Some
     * errors may indicate the client must take an alternate action - for those errors
     * this field may indicate how long to wait before taking the alternate action.
     *
     * @var integer
     */
    public $retryAfterSeconds = null;

    /**
     * UID of the resource. (when there is a single resource which can be described).
     * More info: http://kubernetes.io/docs/user-guide/identifiers#uids
     *
     * @var string
     */
    public $uid = null;


}


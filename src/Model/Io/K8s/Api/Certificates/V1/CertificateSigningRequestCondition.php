<?php

namespace Kubernetes\Model\Io\K8s\Api\Certificates\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * CertificateSigningRequestCondition describes a condition of a
 * CertificateSigningRequest object
 */
class CertificateSigningRequestCondition extends AbstractModel
{
    /**
     * lastTransitionTime is the time the condition last transitioned from one status
     * to another. If unset, when a new condition type is added or an existing
     * condition's status is changed, the server defaults this to the current time.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastTransitionTime = null;

    /**
     * lastUpdateTime is the time of the last update to this condition
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastUpdateTime = null;

    /**
     * message contains a human readable message with details about the request state
     *
     * @var string
     */
    public $message = null;

    /**
     * reason indicates a brief reason for the request state
     *
     * @var string
     */
    public $reason = null;

    /**
     * status of the condition, one of True, False, Unknown. Approved, Denied, and
     * Failed conditions may not be "False" or "Unknown".
     *
     * @var string
     */
    public $status = null;

    /**
     * type of the condition. Known conditions are "Approved", "Denied", and "Failed".
     *
     * An "Approved" condition is added via the /approval subresource, indicating the
     * request was approved and should be issued by the signer.
     *
     * A "Denied" condition is added via the /approval subresource, indicating the
     * request was denied and should not be issued by the signer.
     *
     * A "Failed" condition is added via the /status subresource, indicating the signer
     * failed to issue the certificate.
     *
     * Approved and Denied conditions are mutually exclusive. Approved, Denied, and
     * Failed conditions cannot be removed once added.
     *
     * Only one condition of a given type is allowed.
     *
     * @var string
     */
    public $type = null;
}


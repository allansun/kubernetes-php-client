<?php

namespace Kubernetes\Model\Io\K8s\Api\Certificates\V1beta1;

class CertificateSigningRequestCondition extends \KubernetesRuntime\AbstractModel
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
     * timestamp for the last update to this condition
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastUpdateTime = null;

    /**
     * human readable message with details about the request state
     *
     * @var string
     */
    public $message = null;

    /**
     * brief reason for the request state
     *
     * @var string
     */
    public $reason = null;

    /**
     * Status of the condition, one of True, False, Unknown. Approved, Denied, and
     * Failed conditions may not be "False" or "Unknown". Defaults to "True". If unset,
     * should be treated as "True".
     *
     * @var string
     */
    public $status = null;

    /**
     * type of the condition. Known conditions include "Approved", "Denied", and
     * "Failed".
     *
     * @var string
     */
    public $type = null;


}


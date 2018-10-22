<?php

namespace Kubernetes\Model\Io\K8s\Api\Certificates\V1beta1;

class CertificateSigningRequestCondition extends \Kubernetes\AbstractModel
{

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
     * request approval state, currently Approved or Denied.
     *
     * @var string
     */
    public $type = null;


}


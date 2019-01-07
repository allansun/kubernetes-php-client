<?php

namespace Kubernetes\Model\Io\K8s\Api\Certificates\V1beta1;

class CertificateSigningRequestStatus extends \Kubernetes\AbstractModel
{

    /**
     * If request was approved, the controller will place the issued certificate here.
     *
     * @var string
     */
    public $certificate = null;

    /**
     * Conditions applied to the request, such as approval or denial.
     *
     * @var CertificateSigningRequestCondition[]
     */
    public $conditions = null;


}


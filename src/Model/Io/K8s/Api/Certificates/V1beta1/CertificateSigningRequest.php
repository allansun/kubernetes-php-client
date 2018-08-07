<?php

namespace Kubernetes\Model\Io\K8s\Api\Certificates\V1beta1;

/**
 * Describes a certificate signing request
 */
class CertificateSigningRequest extends \Kubernetes\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'certificates.k8s.io/v1beta1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'CertificateSigningRequest';

    /**
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * The certificate request itself and any additional information.
     *
     * @var CertificateSigningRequestSpec
     */
    public $spec = null;

    /**
     * Derived information about the request.
     *
     * @var CertificateSigningRequestStatus
     */
    public $status = null;


}


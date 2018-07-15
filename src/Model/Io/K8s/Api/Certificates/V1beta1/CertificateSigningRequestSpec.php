<?php

namespace Kubernetes\Model\Io\K8s\Api\Certificates\V1beta1;

/**
 * This information is immutable after the request is created. Only the Request and
 * Usages fields can be set on creation, other fields are derived by Kubernetes and
 * cannot be modified by users.
 */
class CertificateSigningRequestSpec extends \Kubernetes\AbstractModel
{

    /**
     * Extra information about the requesting user. See user.Info interface for
     * details.
     *
     * @var object
     */
    public $extra = null;

    /**
     * Group information about the requesting user. See user.Info interface for
     * details.
     *
     * @var string[]
     */
    public $groups = null;

    /**
     * Base64-encoded PKCS#10 CSR data
     *
     * @var string
     */
    public $request = null;

    /**
     * UID information about the requesting user. See user.Info interface for details.
     *
     * @var string
     */
    public $uid = null;

    /**
     * allowedUsages specifies a set of usage contexts the key will be valid for. See:
     * https://tools.ietf.org/html/rfc5280#section-4.2.1.3
     *      https://tools.ietf.org/html/rfc5280#section-4.2.1.12
     *
     * @var string[]
     */
    public $usages = null;

    /**
     * Information about the requesting user. See user.Info interface for details.
     *
     * @var string
     */
    public $username = null;


}


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


class CertificateSigningRequestSpec extends AbstractModel
{
    /**
     * @var \StdClass
     * Extra information about the requesting user. See user.Info interface for details.
     */
    public $extra;

    /**
     * @var string[]
     * Group information about the requesting user. See user.Info interface for details.
     */
    public $groups;

    /**
     * @var string
     * Base64-encoded PKCS#10 CSR data
     */
    public $request;

    /**
     * @var string
     * UID information about the requesting user. See user.Info interface for details.
     */
    public $uid;

    /**
     * @var string[]
     * allowedUsages specifies a set of usage contexts the key will be valid for. See:
     * https://tools.ietf.org/html/rfc5280#section-4.2.1.3 https://tools.ietf.org/html/rfc5280#section-4.2.1.12
     */
    public $usages;

    /**
     * @var string
     * Information about the requesting user. See user.Info interface for details.
     */
    public $username;
}
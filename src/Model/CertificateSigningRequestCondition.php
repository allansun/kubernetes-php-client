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


/**
 * Class CertificateSigningRequestCondition
 *
 * @package Kubernetes\Model\Certificates
 */
class CertificateSigningRequestCondition
{

    /**
     * @var \DateTime
     * timestamp for the last update to this condition
     */
    public $lastUpdateTime;

    /**
     * @var string
     * human readable message with details about the request state
     */
    public $message;

    /**
     * @var string
     * brief reason for the request state
     */
    public $reason;

    /**
     * @var string
     * request approval state, currently Approved or Denied.
     */
    public $type;
}
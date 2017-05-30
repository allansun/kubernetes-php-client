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
 * StatusDetails is a set of additional properties that MAY be set by the server to provide additional information
 * about a response. The Reason field of a Status object defines what attributes will be set. Clients must ignore
 * fields that do not match the defined type of each attribute, and should assume that any attribute may be empty,
 * invalid, or under defined.
 *
 * @package Kubernetes\Model
 *
 *
 */
class StatusDetails extends AbstractModel
{
    /**
     * @var StatusCause[]
     * The Causes array includes more details associated with the StatusReason failure. Not all StatusReasons may
     * provide detailed causes.
     */
    public $causes;

    /**
     * @var string
     * The group attribute of the resource associated with the status StatusReason.
     */
    public $group;

    /**
     * @var string
     * The kind attribute of the resource associated with the status StatusReason. On some operations may differ
     * from the requested resource Kind. More info:
     * http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var string
     *
     * The name attribute of the resource associated with the status StatusReason (when there is a single name which
     * can be described).
     */
    public $name;

    /**
     * @var integer
     *
     * If specified, the time in seconds before the operation should be retried.
     */
    public $retryAfterSeconds;

    /**
     * @param StatusCause[] $causes
     *
     * @return self
     */
    public function setCauses($causes)
    {
        $this->causes = $this->_createPropertyValue($causes, StatusCause::class, true);

        return $this;
    }

}
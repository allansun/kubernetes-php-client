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
 * HTTPHeader describes a custom header to be used in HTTP probes
 *
 * @package Kubernetes\Model
 */
class HTTPHeader extends AbstractModel
{
    /**
     * @var string
     * The header field name
     */
    public $name;

    /**
     * @var string
     * The header field value
     */
    public $value;
}
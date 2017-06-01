<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Exception;


class InvalidParameterException extends AbstractException
{
    /**
     * InvalidParameterException constructor.
     *
     * @param string      $key
     * @param null|string $value
     */
    public function __construct($key, $value = null)
    {
        $this->message = sprintf("Invalid parameter [%s] was given with value [%s]", $key, $value);
    }
}
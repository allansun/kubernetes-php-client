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


class ProhibitedOperationException extends AbstractException
{


    /**
     * ProhibitedActionException constructor.
     *
     * @param null|string $action
     */
    public function __construct($action = null)
    {
        $this->message = sprintf("Action [%s] is prohibited for this resource.", $action);
    }
}
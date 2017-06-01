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


class PersistentVolumeStatus extends AbstractModel
{
    /**
     * @var string
     * A human-readable message indicating details about why the volume is in this state.
     */
    public $message;

    /**
     * @var string
     * Phase indicates if a volume is available, bound to a claim, or released by a claim. More info:
     * http://kubernetes.io/docs/user-guide/persistent-volumes#phase
     */
    public $phase;

    /**
     * @var string
     * Reason is a brief CamelCase string that describes any failure and is meant for machine parsing and tidy display
     * in the CLI.
     */
    public $reason;
}
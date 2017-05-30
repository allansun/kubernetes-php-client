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
 * Class RollingUpdateDaemonSet
 *
 * @package Kubernetes\Model
 */
class RollingUpdateDaemonSet extends AbstractModel
{
    /**
     * @var integer|string
     * The maximum number of DaemonSet pods that can be unavailable during the update.
     * Value can be an absolute number (ex: 5)
     * or a percentage of total number of DaemonSet pods at the start of the update (ex: 10%).
     * Absolute number is calculated from percentage by rounding up.
     * This cannot be 0. Default value is 1.
     * Example: when this is set to 30%, 30% of the currently running DaemonSet pods can be stopped for an update
     * at any given time. The update starts by stopping at most 30% of the currently running DaemonSet pods and
     * then brings up new DaemonSet pods in their place. Once the new pods are ready, it then proceeds onto other
     * DaemonSet pods, thus ensuring that at least 70% of original number of DaemonSet pods are available at all times
     * during the update.
     *
     */
    public $maxUnavailable = 1;
}
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


class DaemonSetStatus extends AbstractModel
{
    /**
     * @var integer
     * CurrentNumberScheduled is the number of nodes that are running at least 1 daemon pod and are supposed to
     * run the daemon pod. More info: http://releases.k8s.io/HEAD/docs/admin/daemons.md
     */
    public $currentNumberScheduled;

    /**
     * @var integer
     * DesiredNumberScheduled is the total number of nodes that should be running the daemon pod
     * (including nodes correctly running the daemon pod). More info: http://releases.k8s.io/HEAD/docs/admin/daemons.md
     */
    public $desiredNumberScheduled;

    /**
     * @var integer
     * NumberAvailable is the number of nodes that should be running the daemon pod and have one or more
     * of the daemon pod running and available (ready for at least minReadySeconds)
     */
    public $numberAvailable;

    /**
     * @var integer
     * NumberMisscheduled is the number of nodes that are running the daemon pod, but are not supposed to
     * run the daemon pod. More info: http://releases.k8s.io/HEAD/docs/admin/daemons.md
     */
    public $numberMisscheduled;

    /**
     * @var integer
     * NumberReady is the number of nodes that should be running the daemon pod and have one or more of
     * the daemon pod running and ready.
     */
    public $numberReady;

    /**
     * @var integer
     * NumberUnavailable is the number of nodes that should be running the daemon pod and have none of
     * the daemon pod running and available (ready for at least minReadySeconds)
     */
    public $numberUnavailable;

    /**
     * @var integer
     * ObservedGeneration is the most recent generation observed by the daemon set controller.
     */
    public $observedGeneration;

    /**
     * @var integer
     * UpdatedNumberScheduled is the total number of nodes that are running updated daemon pod
     */
    public $updatedNumberScheduled;

}
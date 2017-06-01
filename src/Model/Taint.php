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


class Taint extends AbstractModel
{
    /**
     * @var string
     * Required. The effect of the taint on pods that do not tolerate the taint. Valid effects are NoSchedule,
     * PreferNoSchedule and NoExecute.
     */
    public $effect;

    /**
     * @var string
     * Required. The taint key to be applied to a node.
     */
    public $key;

    /**
     * @var string
     * TimeAdded represents the time at which the taint was added. It is only written for NoExecute taints.
     */
    public $timeAdded;

    /**
     * @var string
     * Required. The taint value corresponding to the taint key.
     */
    public $value;

}
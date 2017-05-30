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


class StatefulSetStatus extends AbstractModel
{
    /**
     * @var integer
     * most recent generation observed by this StatefulSet.
     */
    public $observedGeneration;

    /**
     * @var integer
     * Replicas is the number of actual replicas.
     */
    public $replicas;

}
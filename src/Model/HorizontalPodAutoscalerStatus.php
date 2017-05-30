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


class HorizontalPodAutoscalerStatus extends AbstractModel
{

    /**
     * @var integer
     */
    public $currentCPUUtilizationPercentage;

    /**
     * @var integer
     */
    public $currentReplicas;

    /**
     * @var integer
     */
    public $desiredReplicas;

    /**
     * @var string
     */
    public $lastScaleTime;

    /**
     * @var integer
     */
    public $observedGeneration;

}
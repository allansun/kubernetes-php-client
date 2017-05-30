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


class HorizontalPodAutoscalerSpec extends AbstractModel
{
    /**
     * @var integer
     * upper limit for the number of pods that can be set by the autoscaler; cannot be smaller than MinReplicas.
     */
    public $maxReplicas;

    /**
     * @var integer
     * lower limit for the number of pods that can be set by the autoscaler, default 1.
     */
    public $minReplicas;

    /**
     * @var CrossVersionObjectReference
     * reference to scaled resource; horizontal pod autoscaler will learn the current resource consumption and will set
     * the desired number of pods by using its Scale subresource.
     */
    public $scaleTargetRef;

    /**
     * @var integer
     * target average CPU utilization (represented as a percentage of requested CPU) over all the pods; if not
     * specified the default autoscaling policy will be used.
     */
    public $targetCPUUtilizationPercentage;

    /**
     * @param CrossVersionObjectReference $scaleTargetRef
     *
     * @return self
     */
    public function setScaleTargetRef($scaleTargetRef)
    {
        $this->scaleTargetRef = $this->_createPropertyValue($scaleTargetRef, CrossVersionObjectReference::class, false);

        return $this;
    }


}
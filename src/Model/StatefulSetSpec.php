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


class StatefulSetSpec extends AbstractModel
{
    /**
     * @var integer
     */
    public $replicas;

    /**
     * @var LabelSelector
     */
    public $selector;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var PodTemplateSpec
     */
    public $template;

    /**
     * @var PersistentVolumeClaim[]
     */
    public $volumeClaimTemplates;

    /**
     * @param LabelSelector $selector
     *
     * @return self
     */
    public function setSelector($selector)
    {
        $this->selector = $this->_createPropertyValue($selector, LabelSelector::class, false);

        return $this;
    }

    /**
     * @param PodTemplateSpec $template
     *
     * @return self
     */
    public function setTemplate($template)
    {
        $this->template = $this->_createPropertyValue($template, PodTemplateSpec::class, false);

        return $this;
    }

    /**
     * @param PersistentVolumeClaim[] $volumeClaimTemplates
     *
     * @return self
     */
    public function setVolumeClaimTemplates($volumeClaimTemplates)
    {
        $this->volumeClaimTemplates =
            $this->_createPropertyValue($volumeClaimTemplates, PersistentVolumeClaim::class, true);

        return $this;
    }

}
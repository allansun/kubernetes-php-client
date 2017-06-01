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


class JobSpec extends AbstractModel
{

    /**
     * @var integer
     */
    public $activeDeadlineSeconds;

    /**
     * @var integer
     */
    public $completions;

    /**
     * @var boolean
     */
    public $manualSelector;

    /**
     * @var integer
     */
    public $parallelism;

    /**
     * @var LabelSelector
     */
    public $selector;

    /**
     * @var PodTemplate
     */
    public $template;

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
     * @param PodTemplate $template
     *
     * @return self
     */
    public function setTemplate($template)
    {
        $this->template = $this->_createPropertyValue($template, PodTemplate::class, false);

        return $this;
    }
}
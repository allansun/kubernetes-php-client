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


class DaemonSetSpec extends AbstractModel
{
    /**
     * @var integer
     * MinReadySeconds minimum number of seconds for which a newly created DaemonSet pod should be ready without
     * any of its container crashing, for it to be considered available.
     * Defaults to 0 (pod will be considered available as soon as it is ready).
     */
    public $minReadySeconds = 0;

    /**
     * @var LabelSelector
     * Selector is a label query over pods that are managed by the daemon set. Must match in order to be controlled.
     * If empty, defaulted to labels on Pod template.
     * More info: http://kubernetes.io/docs/user-guide/labels#label-selectors
     */
    public $selector;

    /**
     * @var PodTemplateSpec
     * Template is the object that describes the pod that will be created.
     * The DaemonSet will create exactly one copy of this pod on every node that matches the template's node
     * selector (or on every node if no node selector is specified).
     * More info: http://kubernetes.io/docs/user-guide/replication-controller#pod-template
     */
    public $template;

    /**
     * @var integer
     * A sequence number representing a specific generation of the template. Populated by the system.
     * It can be set only during the creation.
     */
    public $templateGeneration;

    /**
     * @var DaemonSetUpdateStrategy
     * UpdateStrategy to replace existing DaemonSet pods with new pods.
     */
    public $updateStrategy;

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
     * @param DaemonSetUpdateStrategy $updateStrategy
     *
     * @return self
     */
    public function setUpdateStrategy($updateStrategy)
    {
        $this->updateStrategy = $this->_createPropertyValue($updateStrategy, DaemonSetUpdateStrategy::class, false);

        return $this;
    }

}
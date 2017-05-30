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
 * A label selector is a label query over a set of resources.
 * The result of matchLabels and matchExpressions are ANDed.
 * An empty label selector matches all objects.
 * A null label selector matches no objects.
 *
 * @package Kubernetes\Model
 */
class LabelSelector extends AbstractModel
{

    /**
     * @var LabelSelectorRequirement[]
     * matchExpressions is a list of label selector requirements. The requirements are ANDed.
     */
    public $matchExpressions;

    /**
     * @var object
     * matchLabels is a map of {key,value} pairs.
     * A single {key,value} in the matchLabels map is equivalent to an element of matchExpressions,
     * whose key field is "key", the operator is "In", and the values array contains only "value".
     * The requirements are ANDed.
     */
    public $matchLabels;

    /**
     * @param LabelSelectorRequirement[] $matchExpressions
     *
     * @return self
     */
    public function setMatchExpressions($matchExpressions)
    {
        $this->matchExpressions = $this->_createPropertyValue($matchExpressions, LabelSelectorRequirement::class, true);

        return $this;
    }

}
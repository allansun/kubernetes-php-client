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
 * Class NodeSelectorTerm
 *
 * @package Kubernetes\Model
 *
 * A null or empty node selector term matches no objects.
 */
class NodeSelectorTerm extends AbstractModel
{
    /**
     * @var NodeSelectorRequirement[]
     * Required. A list of node selector requirements. The requirements are ANDed.
     */
    public $matchExpressions;

    /**
     * @param NodeSelectorRequirement[] $matchExpressions
     *
     * @return self
     */
    public function setMatchExpressions($matchExpressions)
    {
        $this->matchExpressions = $this->_createPropertyValue($matchExpressions, NodeSelectorRequirement::class, true);

        return $this;
    }

}
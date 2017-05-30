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
 * Class PreferredSchedulingTerm
 *
 * @package Kubernetes\Model
 *
 * An empty preferred scheduling term matches all objects with implicit weight 0 (i.e. it's a no-op).
 * A null preferred scheduling term matches no objects (i.e. is also a no-op).
 */
class PreferredSchedulingTerm extends AbstractModel
{

    /**
     * @var NodeSelectorTerm
     * A node selector term, associated with the corresponding weight.
     */
    public $preference;

    /**
     * @var integer
     * Weight associated with matching the corresponding nodeSelectorTerm, in the range 1-100.
     */
    public $weight;

    /**
     * @param NodeSelectorTerm $preference
     *
     * @return self
     */
    public function setPreference($preference)
    {
        $this->preference = $this->_createPropertyValue($preference, NodeSelectorTerm::class, false);

        return $this;
    }

}
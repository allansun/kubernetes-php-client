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


class PodSecurityPolicyList extends AbstractModelList
{
    /**
     * @var PodSecurityPolicy[]
     */
    public $items;

    /**
     * @param PodSecurityPolicy[] $items
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->items = $this->_createPropertyValue($items, PodSecurityPolicy::class, true);

        return $this;
    }

}
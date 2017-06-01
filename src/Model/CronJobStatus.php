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


class CronJobStatus extends AbstractModel
{
    /**
     * @var ObjectReference
     */
    public $active;

    /**
     * @var string
     */
    public $lastScheduleTime;

    /**
     * @param ObjectReference $active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $this->_createPropertyValue($active, ObjectReference::class, false);

        return $this;
    }

}
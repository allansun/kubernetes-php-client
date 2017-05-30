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


class DaemonSetUpdateStrategy extends AbstractModel
{
    /**
     * @var RollingUpdateDaemonSet
     * Rolling update config params. Present only if DaemonSetUpdateStrategy = RollingUpdate.
     */
    public $rollingUpdate;

    /**
     * @var string
     * Type of daemon set update. Can be "RollingUpdate" or "OnDelete". Default is OnDelete.
     */
    public $type = 'OnDelete';

    /**
     * @param RollingUpdateDaemonSet $rollingUpdate
     *
     * @return self
     */
    public function setRollingUpdate($rollingUpdate)
    {
        $this->rollingUpdate = $this->_createPropertyValue($rollingUpdate, RollingUpdateDaemonSet::class, false);

        return $this;
    }

}
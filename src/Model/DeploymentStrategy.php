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


class DeploymentStrategy extends AbstractModel
{
    /**
     * @var RollingUpdateDeployment
     * Rolling update config params. Present only if DeploymentStrategyType = RollingUpdate.
     */
    public $rollingUpdate;

    /**
     * @var string
     * Type of deployment. Can be "Recreate" or "RollingUpdate". Default is RollingUpdate.
     */
    public $type = DeploymentStrategyType::ROLLINGUPDATE;

    /**
     * @param RollingUpdateDeployment $rollingUpdate
     *
     * @return self
     */
    public function setRollingUpdate($rollingUpdate)
    {
        $this->rollingUpdate = $this->_createPropertyValue($rollingUpdate, RollingUpdateDeployment::class, false);

        return $this;
    }

}
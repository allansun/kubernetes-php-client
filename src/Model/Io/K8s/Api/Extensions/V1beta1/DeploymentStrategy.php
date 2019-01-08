<?php

namespace Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1;

/**
 * DeploymentStrategy describes how to replace existing pods with new ones.
 */
class DeploymentStrategy extends \Kubernetes\AbstractModel
{

    /**
     * Rolling update config params. Present only if DeploymentStrategyType =
     * RollingUpdate.
     *
     * @var RollingUpdateDeployment
     */
    public $rollingUpdate = null;

    /**
     * Type of deployment. Can be "Recreate" or "RollingUpdate". Default is
     * RollingUpdate.
     *
     * @var string
     */
    public $type = null;


}


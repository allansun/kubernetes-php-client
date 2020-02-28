<?php


namespace Kubernetes\App\DeploymentStrategy;


use Kubernetes\Model\Io\K8s\Api\Apps\V1\DeploymentStrategy;
use Kubernetes\Model\Io\K8s\Api\Apps\V1\RollingUpdateDeployment;

class RollingUpdateStrategy extends DeploymentStrategy
{

    public function __construct()
    {
        parent::__construct([
            'type'          => 'RollingUpdate',
            'rollingUpdate' => (new RollingUpdateDeployment([
                'maxSurge'       => '200%',
                'maxUnavailable' => '50%',
            ]))->getArrayCopy()
        ]);
    }
}
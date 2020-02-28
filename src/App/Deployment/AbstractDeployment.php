<?php


namespace Kubernetes\App\Deployment;


use Kubernetes\App\DeploymentStrategy\RollingUpdateStrategy;
use Kubernetes\Model\Io\K8s\Api\Apps\V1\Deployment;

class AbstractDeployment extends Deployment
{
    public $isPodAntiAffinity = false;

    public function __construct($data = null)
    {
        parent::__construct($data);
        $this->metadata->annotations['app.k8s.io/update-timestamp'] = date('c');

        $this->spec->strategy = new RollingUpdateStrategy();
    }
}
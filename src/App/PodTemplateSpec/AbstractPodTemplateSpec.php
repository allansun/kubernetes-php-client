<?php

namespace Kubernetes\App\PodTemplateSpec;


use Kubernetes\App\ProjectBranchServiceBasedInterface;
use Kubernetes\Model\Io\K8s\Api\Core\V1\PodSpec;
use Kubernetes\Model\Io\K8s\Api\Core\V1\PodTemplateSpec;

abstract class AbstractPodTemplateSpec extends PodTemplateSpec implements ProjectBranchServiceBasedInterface
{
    public function __construct($project, $branch)
    {
        parent::__construct();
        $this->spec = new PodSpec();
    }
}
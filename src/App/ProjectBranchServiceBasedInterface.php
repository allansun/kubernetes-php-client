<?php

namespace Kubernetes\App;


interface ProjectBranchServiceBasedInterface extends ProjectBranchBasedInterface
{
    /**
     * @param $project
     * @param $branch
     * @param $service
     *
     * @return self
     */
    public function injectProjectBranchServiceLabels($project, $branch, $service);
}
<?php
namespace Kubernetes\App;


interface ProjectBranchBasedInterface
{
    /**
     * ProjectBranchBased constructor.
     *
     * @param $project
     * @param $branch
     */
    public function __construct($project, $branch);
}
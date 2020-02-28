<?php

namespace Kubernetes\App;


class LabelGenerator
{
    /**
     * 'Name' will be used to identify 'ConfigMap', 'Deployment', 'Service', etc.
     *
     * @param string $project
     * @param string $branch
     * @param string $service value should be any of the SERVICE_* or JOB_* constant in Labels class
     *
     * @return string
     */
    static public function generateName($project, $branch, $service)
    {
        return strtolower(implode('-', [$project, $branch, $service]));
    }

    static public function parseName($serviceTag)
    {
        return explode('-', $serviceTag);
    }

    static public function generateNamesapce($project, $branch)
    {
        return strtolower(implode('-', [$project, $branch]));
    }

    static public function getEnvironment($project, $branch)
    {
        switch ($branch) {
            case GitBranch::MASTER:
                $branchLabel = DeploymentLabel::LIVE;
                break;
            case GitBranch::TEST:
                $branchLabel = DeploymentLabel::TEST;
                break;
            default:
                $branchLabel = DeploymentLabel::DEV;
                break;
        }

        return $project . '-' . $branchLabel;
    }

    static public function generateProjectBranchServiceLabelSelector($project, $branch, $service)
    {
        return [
            GeneralLabels::PROJECT => $project,
            GeneralLabels::BRANCH  => $branch,
            GeneralLabels::SERVICE => $service
        ];
    }

    static public function generateProjectBranchServiceJobSelector($project, $branch, $job)
    {
        return [
            GeneralLabels::PROJECT => $project,
            GeneralLabels::BRANCH  => $branch,
            GeneralLabels::JOB     => $job
        ];
    }
}